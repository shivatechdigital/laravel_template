@extends('admin.layout')

@section('title', 'Create Bill')
@section('heading', 'Create Bill')

@section('content')
<div class="card" style="margin-bottom:16px;">
    <h3 style="margin-top:0;">Step 1: Find User by Phone</h3>
    <form method="get" action="{{ route('admin.billing.create') }}" style="display:flex;gap:10px;align-items:flex-end;flex-wrap:wrap;">
        <div class="field" style="margin:0;min-width:280px;">
            <label>Phone Number</label>
            <input type="text" name="phone" value="{{ $phone }}" placeholder="Enter phone number" required>
        </div>
        <button class="btn" type="submit">Find User</button>
    </form>
</div>

@if ($phone !== '')
    <form method="post" action="{{ route('admin.billing.store') }}">
        @csrf
        <input type="hidden" name="phone" value="{{ $phone }}">

        <div class="card" style="margin-bottom:16px;">
            <h3 style="margin-top:0;">Step 2: Customer Details</h3>

            @if ($user)
                <div style="padding:10px 12px;border:1px solid #c8f1d9;background:#ecfdf3;border-radius:10px;">
                    Existing user found with this phone number.
                </div>

                <div class="grid-2" style="margin-top:12px;">
                    <div><strong>Name:</strong> {{ $user->name }}</div>
                    <div><strong>Email:</strong> {{ $user->email }}</div>
                    <div><strong>Phone:</strong> {{ $user->phone }}</div>
                    <div><strong>Gender:</strong> {{ ucfirst($user->gender ?: '-') }}</div>
                </div>

                <div style="margin-top:12px;">
                    @if ($activeMembership)
                        <span style="display:inline-block;padding:6px 10px;border-radius:999px;background:#dcfce7;color:#166534;font-weight:700;">Active Membership: {{ $activeMembership->membershipPlan?->name }} (Expires {{ $activeMembership->expires_at?->format('d M Y') }})</span>
                    @else
                        <span style="display:inline-block;padding:6px 10px;border-radius:999px;background:#fff7ed;color:#9a3412;font-weight:700;">No Active Membership</span>
                    @endif
                </div>
            @else
                <div style="padding:10px 12px;border:1px solid #fde68a;background:#fffbeb;border-radius:10px;">
                    User not found. Fill details to create a new user profile.
                </div>

                <div class="grid-2" style="margin-top:12px;">
                    <div class="field">
                        <label>Customer Name</label>
                        <input type="text" name="new_name" value="{{ old('new_name') }}" placeholder="Enter full name" required>
                    </div>
                    <div class="field">
                        <label>Gender</label>
                        <select name="new_gender" required>
                            <option value="">Select</option>
                            <option value="male" {{ old('new_gender') === 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('new_gender') === 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ old('new_gender') === 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                    <div class="field" style="grid-column:1/-1;">
                        <label>Email ID (optional)</label>
                        <input type="email" name="new_email" value="{{ old('new_email') }}" placeholder="If provided, login password will be emailed automatically">
                    </div>
                </div>
            @endif
        </div>

        <div class="card" style="margin-bottom:16px;">
            <h3 style="margin-top:0;">Step 3: Membership (Optional)</h3>
            <label style="display:flex;align-items:center;gap:8px;margin-bottom:12px;">
                <input type="checkbox" name="proceed_membership" value="1" {{ old('proceed_membership') ? 'checked' : '' }}>
                Add membership in this bill
            </label>

            <div class="field">
                <label>Select Membership Plan</label>
                <select name="membership_plan_id">
                    <option value="">Select membership</option>
                    @foreach ($membershipPlans as $plan)
                        <option value="{{ $plan->id }}" {{ (string) old('membership_plan_id') === (string) $plan->id ? 'selected' : '' }}>
                            {{ $plan->name }} - Rs. {{ number_format((float) $plan->final_price, 2) }} - {{ $plan->expiry_days }} days
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="card" style="margin-bottom:16px;">
            <h3 style="margin-top:0;">Step 4: Services</h3>
            <p style="color:#5f6589;">Enter quantity for services taken by customer. Quantity 0 means not selected.</p>
            <div style="overflow:auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Price</th>
                            <th style="width:140px;">Qty</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $service)
                            <tr>
                                <td>{{ $service->title }}</td>
                                <td>Rs. {{ number_format((float) ($service->price ?? 0), 2) }}</td>
                                <td>
                                    <input type="number" min="0" name="service_qty[{{ $service->id }}]" value="{{ old('service_qty.' . $service->id, 0) }}">
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="3">No active services available.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card" style="margin-bottom:16px;">
            <h3 style="margin-top:0;">Step 5: Notes (Optional)</h3>
            <div class="field" style="margin-bottom:0;">
                <textarea name="notes" placeholder="Extra billing notes...">{{ old('notes') }}</textarea>
            </div>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">Create Bill</button>
            <a class="btn btn-secondary" href="{{ route('admin.billing.index') }}">View Billing History</a>
        </div>
    </form>

    @if ($user && $recentBills->isNotEmpty())
        <div class="card" style="margin-top:16px;">
            <h3 style="margin-top:0;">Recent Bills for {{ $user->name }}</h3>
            <div style="overflow:auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Bill #</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recentBills as $bill)
                            <tr>
                                <td>{{ $bill->bill_number }}</td>
                                <td>Rs. {{ number_format((float) $bill->total_amount, 2) }}</td>
                                <td>{{ $bill->created_at?->format('d M Y h:i A') }}</td>
                                <td><a class="btn btn-secondary" href="{{ route('admin.billing.show', $bill) }}">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endif
@endsection
