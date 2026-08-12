<?php

namespace App\Http\Controllers;

use App\Models\MembershipPlan;
use App\Models\UserMembership;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class MembershipController extends Controller
{
    public function index(): View
    {
        return view('beauty_salon.membership-plans', [
            'plans' => MembershipPlan::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->latest('id')
                ->get(),
        ]);
    }

    public function purchase(Request $request, MembershipPlan $membership): RedirectResponse
    {
        if (! $membership->is_active) {
            return back()->withErrors(['membership' => 'This membership is not active right now.']);
        }

        $startsAt = Carbon::now();

        UserMembership::create([
            'user_id' => $request->user()->id,
            'membership_plan_id' => $membership->id,
            'base_price' => $membership->price,
            'discount_type' => $membership->discount_type,
            'discount_value' => $membership->discount_value,
            'final_price' => $membership->final_price,
            'starts_at' => $startsAt,
            'expires_at' => $startsAt->copy()->addDays((int) $membership->expiry_days),
            'status' => 'active',
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Membership purchased successfully.');
    }
}
