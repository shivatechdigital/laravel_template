@extends('admin.layout')

@section('title', $mode === 'create' ? 'Create Gallery Item' : 'Edit Gallery Item')
@section('heading', $mode === 'create' ? 'Create Gallery Item' : 'Edit Gallery Item')

@section('content')
<div class="card">
    <form method="post" enctype="multipart/form-data" action="{{ $mode === 'create' ? route('admin.gallery.store') : route('admin.gallery.update', $item) }}">
        @csrf
        @if ($mode === 'edit')
            @method('put')
        @endif

        <div class="grid-2">
            <div class="field">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title', $item->title) }}" required>
            </div>
            <div class="field">
                <label>Type</label>
                <select name="type" required>
                    <option value="image" {{ old('type', $item->type ?? 'image') === 'image' ? 'selected' : '' }}>Image</option>
                    <option value="video" {{ old('type', $item->type) === 'video' ? 'selected' : '' }}>Video</option>
                </select>
            </div>
            <div class="field">
                <label>Sort Order</label>
                <input type="number" min="0" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
            </div>
            <div class="field">
                <label>Video URL (for video type)</label>
                <input type="url" name="video_url" value="{{ old('video_url', $item->video_url) }}" placeholder="https://...">
            </div>
        </div>

        <div class="field">
            <label>Description</label>
            <textarea name="description">{{ old('description', $item->description) }}</textarea>
        </div>

        <div class="grid-2">
            <div class="field">
                <label>Image / Media File</label>
                <input type="file" name="image" accept="image/*">
                @if ($item->media_path)
                    <p style="margin:8px 0 0;">Current: <a href="{{ asset('storage/' . $item->media_path) }}" target="_blank">View file</a></p>
                @endif
            </div>
            <div class="field">
                <label>Thumbnail (optional)</label>
                <input type="file" name="thumbnail" accept="image/*">
                @if ($item->thumbnail_path)
                    <p style="margin:8px 0 0;">Current: <a href="{{ asset('storage/' . $item->thumbnail_path) }}" target="_blank">View thumbnail</a></p>
                @endif
            </div>
        </div>

        <div class="field">
            <label style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $item->is_active ?? true) ? 'checked' : '' }}>
                Active
            </label>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">{{ $mode === 'create' ? 'Create Item' : 'Update Item' }}</button>
            <a class="btn btn-secondary" href="{{ route('admin.gallery.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection
