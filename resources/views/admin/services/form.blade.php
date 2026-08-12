@extends('admin.layout')

@section('title', $mode === 'create' ? 'Create Service' : 'Edit Service')
@section('heading', $mode === 'create' ? 'Create Service' : 'Edit Service')

@section('content')
<div class="card">
    <form method="post" enctype="multipart/form-data" action="{{ $mode === 'create' ? route('admin.services.store') : route('admin.services.update', $service) }}">
        @csrf
        @if ($mode === 'edit')
            @method('put')
        @endif

        <div class="grid-2">
            <div class="field">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title', $service->title) }}" required>
            </div>
            <div class="field">
                <label>Price</label>
                <input type="number" step="0.01" min="0" name="price" value="{{ old('price', $service->price) }}">
            </div>
            <div class="field">
                <label>Duration (minutes)</label>
                <input type="number" min="1" name="duration_minutes" value="{{ old('duration_minutes', $service->duration_minutes) }}">
            </div>
            <div class="field">
                <label>Sort Order</label>
                <input type="number" min="0" name="sort_order" value="{{ old('sort_order', $service->sort_order ?? 0) }}">
            </div>
        </div>

        <div class="field">
            <label>Description</label>
            <textarea name="description">{{ old('description', $service->description) }}</textarea>
        </div>

        <div class="field">
            <label>Sub Services (one per line)</label>
            <textarea name="sub_services_text" placeholder="Women's haircut&#10;Men's haircut&#10;Kids haircut&#10;Hair trim">{{ old('sub_services_text', $subServicesText) }}</textarea>
        </div>

        <div class="field">
            <label>Service Image</label>
            <input type="file" name="image" accept="image/*">
            @if ($service->image_path)
                <p style="margin:8px 0 0;">Current: <a href="{{ asset('storage/' . $service->image_path) }}" target="_blank">View image</a></p>
            @endif
        </div>

        <div class="field">
            <label style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $service->is_active ?? true) ? 'checked' : '' }}>
                Active
            </label>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">{{ $mode === 'create' ? 'Create Service' : 'Update Service' }}</button>
            <a class="btn btn-secondary" href="{{ route('admin.services.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection
