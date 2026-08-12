@extends('admin.layout')

@section('title', 'Admin Pricing')
@section('heading', 'Pricing Management')

@section('content')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:12px;">
        <h3 style="margin:0;">All Pricing Plans</h3>
        <a class="btn btn-secondary" href="{{ route('admin.pricing.create') }}">Add Plan</a>
    </div>

    <div style="overflow:auto;">
        <table>
            <thead>
                <tr>
                    <th>Main Service</th>
                    <th>Name</th>
                    <th>Sub Services</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($plans as $plan)
                    <tr>
                        <td>{{ $plan->service?->title ?: '-' }}</td>
                        <td>{{ $plan->name }}</td>
                        <td>{{ count($plan->sub_service_prices ?? []) }}</td>
                        <td>{{ $plan->is_active ? 'Active' : 'Hidden' }}</td>
                        <td style="display:flex;gap:8px;">
                            <a class="btn btn-secondary" href="{{ route('admin.pricing.edit', $plan) }}">Edit</a>
                            <form method="post" action="{{ route('admin.pricing.destroy', $plan) }}" onsubmit="return confirm('Delete this plan?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">No pricing plans yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
