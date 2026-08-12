@extends('admin.layout')

@section('title', 'Admin Content Blocks')
@section('heading', 'Home/About/Contact Content Blocks')

@section('content')
<div class="card">
    <h3 style="margin-top:0;">Editable Structured Blocks</h3>
    <p style="color:#5f6589;">Edit title, subtitle, content, and JSON data used by dynamic Home, About, and Contact sections.</p>

    <div style="overflow:auto;">
        <table>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blocks as $block)
                    <tr>
                        <td>{{ $block->key }}</td>
                        <td>{{ $block->title ?: '-' }}</td>
                        <td>{{ $block->is_active ? 'Active' : 'Hidden' }}</td>
                        <td><a class="btn btn-secondary" href="{{ route('admin.content-blocks.edit', $block) }}">Edit</a></td>
                    </tr>
                @empty
                    <tr><td colspan="4">No content blocks found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
