@extends('admin.layout')

@section('title', 'Bill ' . $bill->bill_number)
@section('heading', 'Bill Details')

@section('content')
<div class="card" style="margin-bottom:16px;">
    <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap;">
        <div>
            <h3 style="margin:0 0 8px;">{{ $bill->bill_number }}</h3>
            <p style="margin:0;color:#5f6589;">Created on {{ $bill->created_at?->format('d M Y h:i A') }}</p>
        </div>
        <div style="display:flex;gap:10px;">
            <a class="btn btn-secondary" href="{{ route('admin.billing.create', ['phone' => $bill->user?->phone]) }}">New Bill For User</a>
            <a class="btn" href="{{ route('admin.billing.index') }}">Back to Billing</a>
        </div>
    </div>
</div>

<div class="card" style="margin-bottom:16px;">
    <h4 style="margin-top:0;">Customer Details</h4>
    <div class="grid-2">
        <div><strong>Name:</strong> {{ $bill->user?->name ?: '-' }}</div>
        <div><strong>Phone:</strong> {{ $bill->user?->phone ?: '-' }}</div>
        <div><strong>Email:</strong> {{ $bill->user?->email ?: '-' }}</div>
        <div><strong>Gender:</strong> {{ ucfirst($bill->user?->gender ?: '-') }}</div>
        <div><strong>Billed By:</strong> {{ $bill->billedBy?->name ?: '-' }}</div>
        <div><strong>Membership:</strong> {{ $bill->membershipPlan?->name ?: 'Not Added' }}</div>
    </div>
</div>

<div class="card" style="margin-bottom:16px;">
    <h4 style="margin-top:0;">Bill Items</h4>
    <div style="overflow:auto;">
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Line Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bill->items as $item)
                    <tr>
                        <td>{{ ucfirst($item->item_type) }}</td>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>Rs. {{ number_format((float) $item->unit_price, 2) }}</td>
                        <td>Rs. {{ number_format((float) $item->line_total, 2) }}</td>
                    </tr>
                @empty
                    <tr><td colspan="5">No items found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <h4 style="margin-top:0;">Totals</h4>
    <div style="display:grid;gap:6px;max-width:420px;">
        <div style="display:flex;justify-content:space-between;"><span>Membership Amount</span><strong>Rs. {{ number_format((float) $bill->membership_amount, 2) }}</strong></div>
        <div style="display:flex;justify-content:space-between;"><span>Services Amount</span><strong>Rs. {{ number_format((float) $bill->services_amount, 2) }}</strong></div>
        <div style="display:flex;justify-content:space-between;border-top:1px solid #dde3f0;padding-top:8px;"><span>Final Total</span><strong>Rs. {{ number_format((float) $bill->total_amount, 2) }}</strong></div>
    </div>

    @if ($bill->notes)
        <div style="margin-top:14px;">
            <strong>Notes:</strong>
            <p style="margin:6px 0 0;">{{ $bill->notes }}</p>
        </div>
    @endif
</div>
@endsection
