@extends('admin.layout')

@section('title', 'Admin Social Links')
@section('heading', 'Social Media Links')

@section('content')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:12px;">
        <h3 style="margin:0;">All Social Platforms</h3>
        <a class="btn btn-secondary" href="{{ route('admin.social-links.create') }}">Add Social Link</a>
    </div>

    <div style="overflow:auto;">
        <table>
            <thead>
                <tr>
                    <th>Platform</th>
                    <th>Label</th>
                    <th>URL</th>
                    <th>Icon</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($links as $link)
                    <tr>
                        <td>{{ ucfirst($link->platform) }}</td>
                        <td>{{ $link->label }}</td>
                        <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
                        <td><i class="{{ $link->icon_class }}"></i> {{ $link->icon_class }}</td>
                        <td>{{ $link->is_active ? 'Active' : 'Hidden' }}</td>
                        <td>{{ $link->sort_order }}</td>
                        <td style="display:flex;gap:8px;">
                            <a class="btn btn-secondary" href="{{ route('admin.social-links.edit', $link) }}">Edit</a>
                            <form method="post" action="{{ route('admin.social-links.destroy', $link) }}" onsubmit="return confirm('Delete this social link?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7">No social links yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
