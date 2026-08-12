@extends('admin.layout')

@section('title', $mode === 'create' ? 'Create Team Member' : 'Edit Team Member')
@section('heading', $mode === 'create' ? 'Create Team Member' : 'Edit Team Member')

@section('content')
<div class="card">
    <form method="post" enctype="multipart/form-data" action="{{ $mode === 'create' ? route('admin.team-members.store') : route('admin.team-members.update', $member) }}">
        @csrf
        @if ($mode === 'edit')
            @method('put')
        @endif

        <div class="grid-2">
            <div class="field">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name', $member->name) }}" required>
            </div>
            <div class="field">
                <label>Designation</label>
                <input type="text" name="designation" value="{{ old('designation', $member->designation) }}" placeholder="Makeup Artist">
            </div>
            <div class="field">
                <label>Sort Order</label>
                <input type="number" min="0" name="sort_order" value="{{ old('sort_order', $member->sort_order ?? 0) }}">
            </div>
            <div class="field">
                <label>Home Featured Priority</label>
                <input type="number" min="0" name="home_priority" value="{{ old('home_priority', $member->home_priority ?? 0) }}">
                <small style="display:block;margin-top:6px;color:#666;">Higher value means higher priority on home team section.</small>
            </div>
        </div>

        <div class="field">
            <label>Bio</label>
            <textarea name="bio">{{ old('bio', $member->bio) }}</textarea>
        </div>

        <div class="field">
            <label>Photo</label>
            <input type="file" id="team-image-input" name="image" accept="image/*">
            <small style="display:block;margin-top:6px;color:#666;">Recommended ratio: 1:1 square image (example 600 x 600 px).</small>
            @if ($member->image_path)
                <p style="margin:8px 0 0;">Current: <a href="{{ asset('storage/' . $member->image_path) }}" target="_blank">View image</a></p>
            @endif
            <div id="team-image-preview-wrap" style="margin-top:12px;max-width:220px;display:none;">
                <div style="width:220px;aspect-ratio:1/1;border:1px dashed #cfcfcf;border-radius:8px;overflow:hidden;background:#fafafa;display:flex;align-items:center;justify-content:center;">
                    <img id="team-image-preview" src="" alt="Image preview" style="width:100%;height:100%;object-fit:cover;display:none;">
                    <span id="team-image-preview-placeholder" style="font-size:12px;color:#888;padding:10px;text-align:center;">Selected image preview</span>
                </div>
            </div>
        </div>

        <div class="field">
            <label style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="show_on_home" value="1" {{ old('show_on_home', $member->show_on_home ?? false) ? 'checked' : '' }}>
                Show on Home Page (max 4 will be shown)
            </label>
        </div>

        <div class="field">
            <label style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $member->is_active ?? true) ? 'checked' : '' }}>
                Active
            </label>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">{{ $mode === 'create' ? 'Create Member' : 'Update Member' }}</button>
            <a class="btn btn-secondary" href="{{ route('admin.team-members.index') }}">Back</a>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('team-image-input');
    const wrap = document.getElementById('team-image-preview-wrap');
    const preview = document.getElementById('team-image-preview');
    const placeholder = document.getElementById('team-image-preview-placeholder');

    if (!input || !wrap || !preview || !placeholder) {
        return;
    }

    input.addEventListener('change', function (event) {
        const file = event.target.files && event.target.files[0];
        if (!file) {
            wrap.style.display = 'none';
            preview.style.display = 'none';
            placeholder.style.display = 'block';
            preview.removeAttribute('src');
            return;
        }

        const reader = new FileReader();
        reader.onload = function (loadEvent) {
            preview.src = loadEvent.target?.result || '';
            wrap.style.display = 'block';
            preview.style.display = 'block';
            placeholder.style.display = 'none';
        };
        reader.readAsDataURL(file);
    });
});
</script>
@endsection
