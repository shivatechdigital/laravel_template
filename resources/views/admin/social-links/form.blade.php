@extends('admin.layout')

@section('title', $mode === 'create' ? 'Create Social Link' : 'Edit Social Link')
@section('heading', $mode === 'create' ? 'Create Social Link' : 'Edit Social Link')

@section('content')
<div class="card">
    <form method="post" action="{{ $mode === 'create' ? route('admin.social-links.store') : route('admin.social-links.update', $link) }}">
        @csrf
        @if ($mode === 'edit')
            @method('put')
        @endif

        <div class="grid-2">
            <div class="field">
                <label>Platform Key</label>
                <input type="text" name="platform" value="{{ old('platform', $link->platform) }}" placeholder="facebook" required>
            </div>
            <div class="field">
                <label>Label</label>
                <input type="text" name="label" value="{{ old('label', $link->label) }}" placeholder="Facebook" required>
            </div>
            <div class="field">
                <label>URL</label>
                <input type="url" name="url" value="{{ old('url', $link->url) }}" placeholder="https://facebook.com/your-page" required>
            </div>
            <div class="field">
                <label>Icon Class (Font Awesome)</label>
                <input type="text" name="icon_class" value="{{ old('icon_class', $link->icon_class ?: 'fa fa-facebook') }}" placeholder="fa fa-facebook" required>
            </div>
            <div class="field">
                <label>CSS Class</label>
                <input type="text" name="css_class" value="{{ old('css_class', $link->css_class ?: $link->platform) }}" placeholder="facebook">
            </div>
            <div class="field">
                <label>Sort Order</label>
                <input type="number" min="0" name="sort_order" value="{{ old('sort_order', $link->sort_order ?? 0) }}">
            </div>
        </div>

        <div class="field">
            <label style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="open_new_tab" value="1" {{ old('open_new_tab', $link->open_new_tab ?? true) ? 'checked' : '' }}>
                Open in new tab
            </label>
        </div>

        <div class="field">
            <label style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $link->is_active ?? true) ? 'checked' : '' }}>
                Active
            </label>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">{{ $mode === 'create' ? 'Create Link' : 'Update Link' }}</button>
            <a class="btn btn-secondary" href="{{ route('admin.social-links.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection
