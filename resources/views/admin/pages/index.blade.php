@extends('admin.layout')

@section('title', 'Template Editor')
@section('heading', 'Page Template Editor')

@section('content')
<div class="card">
    <h3 style="margin-top:0;">Editable Beauty Salon Pages</h3>
    <p style="color:#5f6589;">Choose any Blade page and edit its content. Changes will reflect instantly on frontend.</p>

    <div style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:10px;">
        @foreach ($files as $file)
            <a class="btn btn-secondary" style="text-align:center;" href="{{ route('admin.pages.edit', ['file' => $file]) }}">{{ $file }}</a>
        @endforeach
    </div>
</div>
@endsection
