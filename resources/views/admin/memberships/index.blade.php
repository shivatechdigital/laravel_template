@extends('admin.layout')

@section('title', 'Admin Membership Plans')
@section('heading', 'Membership Plan Management')

@section('content')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:12px;">
        <h3 style="margin:0;">All Membership Plans</h3>
        <a class="btn btn-secondary" href="{{ route('admin.memberships.create') }}">Add Membership Plan</a>
    </div>

    <div style="overflow:auto;">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Final Price</th>
                    <th>Expiry</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($plans as $plan)
                    <tr>
                        <td>{{ $plan->name }}</td>
                        <td>Rs. {{ number_format((float) $plan->price, 2) }}</td>
                        <td>
                            @if ($plan->discount_type === 'percentage')
                                {{ rtrim(rtrim(number_format((float) $plan->discount_value, 2), '0'), '.') }}%
                            @else
                                Rs. {{ number_format((float) $plan->discount_value, 2) }}
                            @endif
                        </td>
                        <td>Rs. {{ number_format((float) $plan->final_price, 2) }}</td>
                        <td>{{ $plan->expiry_days }} day(s)</td>
                        <td>{{ $plan->is_active ? 'Active' : 'Inactive' }}</td>
                        <td style="display:flex;gap:8px;">
                            <a class="btn btn-secondary" href="{{ route('admin.memberships.edit', $plan) }}">Edit</a>
                            <form method="post" action="{{ route('admin.memberships.destroy', $plan) }}" onsubmit="return confirm('Delete this membership plan?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7">No membership plans found yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
