<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\MembershipPlan;
use App\Models\Service;
use App\Models\User;
use App\Models\UserMembership;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class BillingController extends Controller
{
    public function index(Request $request): View
    {
        $phone = $this->normalizePhone((string) $request->query('phone', ''));

        $billsQuery = Bill::query()
            ->with(['user:id,name,phone,email', 'membershipPlan:id,name'])
            ->latest();

        if ($phone !== '') {
            $billsQuery->whereHas('user', function ($query) use ($phone): void {
                $query->where('phone', $phone);
            });
        }

        return view('admin.billing.index', [
            'bills' => $billsQuery->limit(50)->get(),
            'phone' => $phone,
        ]);
    }

    public function create(Request $request): View
    {
        $phone = $this->normalizePhone((string) $request->query('phone', ''));
        $user = null;
        $activeMembership = null;
        $recentBills = collect();

        if ($phone !== '') {
            $user = User::query()->where('phone', $phone)->first();

            if ($user) {
                $activeMembership = UserMembership::query()
                    ->with('membershipPlan:id,name,final_price,expiry_days')
                    ->where('user_id', $user->id)
                    ->where('status', 'active')
                    ->where('expires_at', '>=', now())
                    ->latest('expires_at')
                    ->first();

                $recentBills = Bill::query()
                    ->with('items')
                    ->where('user_id', $user->id)
                    ->latest()
                    ->limit(10)
                    ->get();
            }
        }

        return view('admin.billing.create', [
            'phone' => $phone,
            'user' => $user,
            'activeMembership' => $activeMembership,
            'recentBills' => $recentBills,
            'membershipPlans' => MembershipPlan::query()->where('is_active', true)->orderBy('sort_order')->latest('id')->get(),
            'services' => Service::query()->where('is_active', true)->orderBy('sort_order')->latest('id')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $baseRules = [
            'phone' => ['required', 'string', 'max:30'],
            'proceed_membership' => ['nullable', 'boolean'],
            'membership_plan_id' => ['nullable', 'integer', 'exists:membership_plans,id'],
            'service_qty' => ['nullable', 'array'],
            'service_qty.*' => ['nullable', 'integer', 'min:0'],
            'notes' => ['nullable', 'string'],
        ];

        $data = $request->validate($baseRules);

        $phone = $this->normalizePhone((string) $data['phone']);
        if ($phone === '') {
            throw ValidationException::withMessages([
                'phone' => 'Phone number is required.',
            ]);
        }

        $user = User::query()->where('phone', $phone)->first();

        if (! $user) {
            $newUserRules = [
                'new_name' => ['required', 'string', 'max:120'],
                'new_gender' => ['required', Rule::in(['male', 'female', 'other'])],
                'new_email' => ['nullable', 'email', 'max:190', 'unique:users,email'],
            ];
            $newUserData = $request->validate($newUserRules);

            $rawPassword = Str::password(10);
            $email = trim((string) ($newUserData['new_email'] ?? ''));

            if ($email === '') {
                $email = 'user' . preg_replace('/\D+/', '', $phone) . '+' . now()->timestamp . '@autogen.local';
            }

            $user = User::create([
                'name' => $newUserData['new_name'],
                'email' => $email,
                'phone' => $phone,
                'gender' => $newUserData['new_gender'],
                'password' => Hash::make($rawPassword),
                'role' => 'user',
            ]);

            if (! str_ends_with($email, '@autogen.local')) {
                try {
                    Mail::raw(
                        "Welcome to BeautyZone. Your login password is: {$rawPassword}. Please login and change your password.",
                        function ($message) use ($email): void {
                            $message->to($email)->subject('BeautyZone Login Credentials');
                        }
                    );
                } catch (\Throwable $exception) {
                    // Billing should continue even if mail service is temporarily unavailable.
                }
            }
        }

        $selectedServices = collect($request->input('service_qty', []))
            ->mapWithKeys(fn ($qty, $serviceId) => [(int) $serviceId => (int) $qty])
            ->filter(fn ($qty, $serviceId) => $serviceId > 0 && $qty > 0);

        $includeMembership = $request->boolean('proceed_membership');

        $membershipPlan = null;
        $membershipAmount = 0.0;
        if ($includeMembership) {
            $membershipId = (int) ($data['membership_plan_id'] ?? 0);
            $membershipPlan = MembershipPlan::query()->where('is_active', true)->find($membershipId);

            if (! $membershipPlan) {
                throw ValidationException::withMessages([
                    'membership_plan_id' => 'Please select an active membership plan.',
                ]);
            }

            $membershipAmount = (float) $membershipPlan->final_price;
        }

        if ($selectedServices->isEmpty() && ! $membershipPlan) {
            throw ValidationException::withMessages([
                'service_qty' => 'Please add at least one service or membership in bill.',
            ]);
        }

        $serviceModels = Service::query()->whereIn('id', $selectedServices->keys())->get()->keyBy('id');

        $servicesAmount = 0.0;
        $serviceItems = [];

        foreach ($selectedServices as $serviceId => $qty) {
            $service = $serviceModels->get($serviceId);
            if (! $service) {
                continue;
            }

            $unitPrice = (float) ($service->price ?? 0);
            $lineTotal = round($unitPrice * $qty, 2);
            $servicesAmount += $lineTotal;

            $serviceItems[] = [
                'item_type' => 'service',
                'service_id' => $service->id,
                'item_name' => $service->title,
                'quantity' => $qty,
                'unit_price' => $unitPrice,
                'line_total' => $lineTotal,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        if (empty($serviceItems) && ! $membershipPlan) {
            throw ValidationException::withMessages([
                'service_qty' => 'Selected services were invalid. Please try again.',
            ]);
        }

        $totalAmount = round($membershipAmount + $servicesAmount, 2);

        $bill = DB::transaction(function () use ($request, $user, $membershipPlan, $membershipAmount, $servicesAmount, $totalAmount, $serviceItems, $includeMembership, $data) {
            $bill = Bill::create([
                'bill_number' => 'BILL-' . now()->format('YmdHis') . '-' . Str::upper(Str::random(4)),
                'user_id' => $user->id,
                'billed_by' => (int) $request->user()->id,
                'membership_plan_id' => $membershipPlan?->id,
                'membership_amount' => $membershipAmount,
                'services_amount' => $servicesAmount,
                'total_amount' => $totalAmount,
                'notes' => $data['notes'] ?? null,
            ]);

            if ($membershipPlan) {
                $bill->items()->create([
                    'item_type' => 'membership',
                    'service_id' => null,
                    'item_name' => 'Membership - ' . $membershipPlan->name,
                    'quantity' => 1,
                    'unit_price' => (float) $membershipPlan->final_price,
                    'line_total' => (float) $membershipPlan->final_price,
                ]);
            }

            if (! empty($serviceItems)) {
                $bill->items()->insert(array_map(function (array $item) use ($bill): array {
                    $item['bill_id'] = $bill->id;
                    return $item;
                }, $serviceItems));
            }

            if ($includeMembership && $membershipPlan) {
                UserMembership::create([
                    'user_id' => $user->id,
                    'membership_plan_id' => $membershipPlan->id,
                    'base_price' => $membershipPlan->price,
                    'discount_type' => $membershipPlan->discount_type,
                    'discount_value' => $membershipPlan->discount_value,
                    'final_price' => $membershipPlan->final_price,
                    'starts_at' => Carbon::now(),
                    'expires_at' => Carbon::now()->addDays((int) $membershipPlan->expiry_days),
                    'status' => 'active',
                ]);
            }

            return $bill;
        });

        return redirect()->route('admin.billing.show', $bill)->with('success', 'Bill created successfully.');
    }

    public function show(Bill $billing): View
    {
        $billing->load([
            'user:id,name,email,phone,gender',
            'billedBy:id,name',
            'membershipPlan:id,name',
            'items.service:id,title',
        ]);

        return view('admin.billing.show', [
            'bill' => $billing,
        ]);
    }

    private function normalizePhone(string $phone): string
    {
        return preg_replace('/\s+/', '', trim($phone)) ?? '';
    }
}
