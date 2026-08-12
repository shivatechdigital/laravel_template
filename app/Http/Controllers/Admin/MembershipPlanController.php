<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MembershipPlan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class MembershipPlanController extends Controller
{
    public function index(): View
    {
        return view('admin.memberships.index', [
            'plans' => MembershipPlan::query()->orderBy('sort_order')->latest('id')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.memberships.form', [
            'plan' => new MembershipPlan(),
            'mode' => 'create',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateData($request);

        $data['slug'] = Str::slug($data['name']) . '-' . Str::lower(Str::random(4));
        $data['final_price'] = $this->calculateFinalPrice(
            (float) $data['price'],
            (string) $data['discount_type'],
            (float) $data['discount_value']
        );

        MembershipPlan::create($data);

        return redirect()->route('admin.memberships.index')->with('success', 'Membership plan created successfully.');
    }

    public function edit(MembershipPlan $membership): View
    {
        return view('admin.memberships.form', [
            'plan' => $membership,
            'mode' => 'edit',
        ]);
    }

    public function update(Request $request, MembershipPlan $membership): RedirectResponse
    {
        $data = $this->validateData($request);

        $data['final_price'] = $this->calculateFinalPrice(
            (float) $data['price'],
            (string) $data['discount_type'],
            (float) $data['discount_value']
        );

        $membership->update($data);

        return redirect()->route('admin.memberships.index')->with('success', 'Membership plan updated successfully.');
    }

    public function destroy(MembershipPlan $membership): RedirectResponse
    {
        $membership->delete();

        return redirect()->route('admin.memberships.index')->with('success', 'Membership plan deleted.');
    }

    private function validateData(Request $request): array
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'discount_type' => ['required', Rule::in(['flat', 'percentage'])],
            'discount_value' => ['nullable', 'numeric', 'min:0'],
            'expiry_days' => ['required', 'integer', 'min:1'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data['discount_value'] = (float) ($data['discount_value'] ?? 0);
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['is_active'] = $request->boolean('is_active');

        $price = (float) $data['price'];
        if ($data['discount_type'] === 'percentage' && $data['discount_value'] > 100) {
            throw ValidationException::withMessages([
                'discount_value' => 'Percentage discount cannot exceed 100.',
            ]);
        }

        if ($data['discount_type'] === 'flat' && $data['discount_value'] > $price) {
            throw ValidationException::withMessages([
                'discount_value' => 'Flat discount cannot exceed price.',
            ]);
        }

        return $data;
    }

    private function calculateFinalPrice(float $price, string $discountType, float $discountValue): float
    {
        if ($discountType === 'percentage') {
            return round(max(0, $price - (($price * $discountValue) / 100)), 2);
        }

        return round(max(0, $price - $discountValue), 2);
    }
}
