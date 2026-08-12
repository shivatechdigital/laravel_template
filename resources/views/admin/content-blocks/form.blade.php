@extends('admin.layout')

@section('title', 'Edit Block: ' . $block->key)
@section('heading', 'Edit Content Block: ' . $block->key)

@section('content')
@php($isContactBlock = $block->key === 'contact_info')
<div class="card">
    <form method="post" action="{{ route('admin.content-blocks.update', $block) }}">
        @csrf
        @method('put')

        <div class="field">
            <label>Key</label>
            <input type="text" value="{{ $block->key }}" disabled>
        </div>

        <div class="grid-2">
            <div class="field">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title', $block->title) }}">
            </div>
            <div class="field">
                <label>Subtitle</label>
                <input type="text" name="subtitle" value="{{ old('subtitle', $block->subtitle) }}">
            </div>
        </div>

        <div class="field">
            <label>Content</label>
            <textarea name="content">{{ old('content', $block->content) }}</textarea>
        </div>

        @if ($isContactBlock)
            <div class="field">
                <label>Address</label>
                <textarea name="contact_address" placeholder="Enter full address">{{ old('contact_address', $contactData['address'] ?? '') }}</textarea>
            </div>

            <div class="grid-2">
                <div class="field">
                    <label>Phone Number</label>
                    <input type="text" name="contact_phone" value="{{ old('contact_phone', $contactData['phone'] ?? '') }}" placeholder="+91 9876543210">
                </div>
                <div class="field">
                    <label>Email ID</label>
                    <input type="email" name="contact_email" value="{{ old('contact_email', $contactData['email'] ?? '') }}" placeholder="info@example.com">
                </div>
            </div>

            <div class="field">
                <label>Map Embed Link / Path</label>
                <textarea name="contact_map_embed" placeholder="Paste iframe HTML, full embed URL, or only ?pb=... path">{{ old('contact_map_embed', $contactData['map_embed'] ?? '') }}</textarea>
                <small style="color:#5f6589;">Aap full iframe bhi paste kar sakte hain, ya sirf Google embed URL/path. Frontend automatically map show karega.</small>
            </div>
        @else
            <div class="field">
                <label>Data JSON</label>
                <textarea name="data_json" style="min-height:280px;font-family:Consolas, monospace;">{{ old('data_json', $dataJson) }}</textarea>
                <small style="color:#5f6589;">Use valid JSON array/object. Example keys depend on block type.</small>
            </div>
        @endif

        <div class="field">
            <label style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $block->is_active) ? 'checked' : '' }}>
                Active
            </label>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">Save Block</button>
            <a class="btn btn-secondary" href="{{ route('admin.content-blocks.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection
