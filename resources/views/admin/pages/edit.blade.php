@extends('admin.layout')

@section('title', 'Edit Page: ' . $file)
@section('heading', 'Editing ' . $file)

@section('content')
<div class="card">
    <form method="post" action="{{ route('admin.pages.update', ['file' => $file]) }}">
        @csrf
        @method('put')

        <div class="field">
            <label>Blade Source</label>
            <textarea name="content" style="min-height:560px;font-family:Consolas, monospace;">{{ old('content', $content) }}</textarea>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">Save Page</button>
            <a class="btn btn-secondary" href="{{ route('admin.pages.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection
