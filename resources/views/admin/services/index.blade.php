@extends('admin.layout')

@section('title', 'Admin Services')
@section('heading', 'Service Management')

@section('content')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:12px;">
        <h3 style="margin:0;">All Services</h3>
        <a class="btn btn-secondary" href="{{ route('admin.services.create') }}">Add Service</a>
    </div>

    <div style="overflow:auto;">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Sub Services</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr>
                        <td>{{ $service->title }}</td>
                        <td>{{ count($service->sub_services ?? []) }}</td>
                        <td>{{ $service->price ? 'Rs. ' . number_format((float) $service->price, 2) : '-' }}</td>
                        <td>{{ $service->duration_minutes ? $service->duration_minutes . ' min' : '-' }}</td>
                        <td>{{ $service->is_active ? 'Active' : 'Hidden' }}</td>
                        <td>{{ $service->sort_order }}</td>
                        <td style="display:flex;gap:8px;">
                            <a class="btn btn-secondary" href="{{ route('admin.services.edit', $service) }}">Edit</a>
                            <form method="post" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Delete this service?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7">No services found yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
