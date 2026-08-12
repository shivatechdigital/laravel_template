@extends('admin.layout')

@section('title', $mode === 'create' ? 'Create Pricing Plan' : 'Edit Pricing Plan')
@section('heading', $mode === 'create' ? 'Create Pricing Plan' : 'Edit Pricing Plan')

@section('content')
<div class="card">
    <form method="post" action="{{ $mode === 'create' ? route('admin.pricing.store') : route('admin.pricing.update', $plan) }}">
        @csrf
        @if ($mode === 'edit')
            @method('put')
        @endif

        <div class="grid-2">
            <div class="field">
                <label>Main Service (optional link)</label>
                <select name="service_id">
                    <option value="">Select service</option>
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}" {{ (string) old('service_id', $plan->service_id) === (string) $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="field">
                <label>Main Service Name</label>
                <input type="text" name="name" value="{{ old('name', $plan->name) }}" required>
            </div>
            <div class="field">
                <label>Main Service Description</label>
                <input type="text" name="description" value="{{ old('description', $plan->description) }}">
            </div>
            <div class="field">
                <label>Sort Order</label>
                <input type="number" min="0" name="sort_order" value="{{ old('sort_order', $plan->sort_order ?? 0) }}">
            </div>
        </div>

        <div class="field">
            <label>Sub Services with Pricing</label>
            <textarea name="sub_service_pricing_text" placeholder="Women haircut | 499 | includes wash and blow dry&#10;Men haircut | 299 | clean cut and styling&#10;Keratin treatment | 3500">{{ old('sub_service_pricing_text', $subServicePricingText) }}</textarea>
            <small style="color:#5f6589;">Format per line: Sub Service | Price | Optional Description</small>
        </div>

        <div class="field">
            <label style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $plan->is_active ?? true) ? 'checked' : '' }}>
                Active
            </label>
        </div>

        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">{{ $mode === 'create' ? 'Create Plan' : 'Update Plan' }}</button>
            <a class="btn btn-secondary" href="{{ route('admin.pricing.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection
