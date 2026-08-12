@extends('admin.layout')

@section('title', 'Billing History')
@section('heading', 'Billing History')

@section('content')
<div class="card" style="margin-bottom:16px;">
    <form method="get" action="{{ route('admin.billing.index') }}" class="grid-2" style="align-items:end;">
        <div class="field" style="margin:0;">
            <label>Search by Phone Number</label>
            <input type="text" name="phone" value="{{ $phone }}" placeholder="Enter phone number">
        </div>
        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">Search</button>
            <a class="btn btn-secondary" href="{{ route('admin.billing.create') }}">Create New Bill</a>
        </div>
    </form>
</div>

<div class="card">
    <div style="overflow:auto;">
        <table>
            <thead>
                <tr>
                    <th>Bill #</th>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Membership</th>
                    <th>Services</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bills as $bill)
                    <tr>
                        <td>{{ $bill->bill_number }}</td>
                        <td>{{ $bill->user?->name ?: '-' }}</td>
                        <td>{{ $bill->user?->phone ?: '-' }}</td>
                        <td>Rs. {{ number_format((float) $bill->membership_amount, 2) }}</td>
                        <td>Rs. {{ number_format((float) $bill->services_amount, 2) }}</td>
                        <td><strong>Rs. {{ number_format((float) $bill->total_amount, 2) }}</strong></td>
                        <td>{{ $bill->created_at?->format('d M Y h:i A') }}</td>
                        <td><a class="btn btn-secondary" href="{{ route('admin.billing.show', $bill) }}">View</a></td>
                    </tr>
                @empty
                    <tr><td colspan="8">No bills found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
