@extends('admin.layout')

@section('title', 'Admin Gallery')
@section('heading', 'Gallery Management')

@section('content')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:12px;">
        <h3 style="margin:0;">Gallery Items</h3>
        <a class="btn btn-secondary" href="{{ route('admin.gallery.create') }}">Add Item</a>
    </div>

    <div style="overflow:auto;">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Preview</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ ucfirst($item->type) }}</td>
                        <td>
                            @if ($item->type === 'image' && $item->media_path)
                                <a href="{{ asset('storage/' . $item->media_path) }}" target="_blank">View image</a>
                            @elseif ($item->video_url)
                                <a href="{{ $item->video_url }}" target="_blank">View video</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $item->is_active ? 'Active' : 'Hidden' }}</td>
                        <td>{{ $item->sort_order }}</td>
                        <td style="display:flex;gap:8px;">
                            <a class="btn btn-secondary" href="{{ route('admin.gallery.edit', $item) }}">Edit</a>
                            <form method="post" action="{{ route('admin.gallery.destroy', $item) }}" onsubmit="return confirm('Delete this item?');">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6">No gallery items yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
