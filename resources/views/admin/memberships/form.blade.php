@extends('admin.layout')

@section('title', $mode === 'create' ? 'Create Membership Plan' : 'Edit Membership Plan')
@section('heading', $mode === 'create' ? 'Create Membership Plan' : 'Edit Membership Plan')

@section('content')
<div class="card">
    <form method="post" action="{{ $mode === 'create' ? route('admin.memberships.store') : route('admin.memberships.update', $plan) }}">
        @csrf
        @if ($mode === 'edit')
            @method('put')
        @endif

        <div class="grid-2">
            <div class="field">
                <label>Plan Name</label>
                <input type="text" name="name" value="{{ old('name', $plan->name) }}" required>
            </div>
            <div class="field">
                <label>Price</label>
                <input type="number" step="0.01" min="0" name="price" value="{{ old('price', $plan->price) }}" required>
            </div>
            <div class="field">
                <label>Discount Type</label>
                <select name="discount_type" required>
                    <option value="flat" {{ old('discount_type', $plan->discount_type ?? 'flat') === 'flat' ? 'selected' : '' }}>Flat</option>
                    <option value="percentage" {{ old('discount_type', $plan->discount_type ?? 'flat') === 'percentage' ? 'selected' : '' }}>Percentage</option>
                </select>
            </div>
            <div class="field">
                <label>Discount Value</label>
                <input type="number" step="0.01" min="0" name="discount_value" value="{{ old('discount_value', $plan->discount_value ?? 0) }}">
            </div>
            <div class="field">
                <label>Expiry Period (days)</label>
                <input type="number" min="1" name="expiry_days" value="{{ old('expiry_days', $plan->expiry_days ?? 30) }}" required>
            </div>
            <div class="field">
                <label>Sort Order</label>
                <input type="number" min="0" name="sort_order" value="{{ old('sort_order', $plan->sort_order ?? 0) }}">
            </div>
        </div>

        <div class="field">
            <label>Description</label>
            <textarea name="description" placeholder="Plan benefits, terms, exclusions...">{{ old('description', $plan->description) }}</textarea>
        </div>

        <div class="field">
            <label style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $plan->is_active ?? true) ? 'checked' : '' }}>
                Active
            </label>
        </div>

        @php
            $previewPrice = (float) old('price', $plan->price ?? 0);
            $previewType = old('discount_type', $plan->discount_type ?? 'flat');
            $previewDiscount = (float) old('discount_value', $plan->discount_value ?? 0);
            $previewFinal = $previewType === 'percentage'
                ? max(0, $previewPrice - (($previewPrice * $previewDiscount) / 100))
                : max(0, $previewPrice - $previewDiscount);
        @endphp

        <div style="margin:0 0 16px;padding:10px 12px;border-radius:10px;background:#f8fbff;border:1px solid #dce8ff;">
            <strong>Preview Final Price:</strong> Rs. {{ number_format($previewFinal, 2) }}
        </div>

        <div style="display:flex;gap:10px;">
            <button class="btn" type="submit">{{ $mode === 'create' ? 'Create Plan' : 'Update Plan' }}</button>
            <a class="btn btn-secondary" href="{{ route('admin.memberships.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection
