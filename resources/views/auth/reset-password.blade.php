@extends('beauty_salon.layouts.app')

@section('title', 'Create New Password | BeautyZone')

@section('page_styles')
<style>
.reset-shell {
    min-height: 70vh;
    display: grid;
    place-items: center;
    background: linear-gradient(140deg, #f5fbff 0%, #fff7fc 100%);
}
.reset-card {
    width: min(520px, 94vw);
    background: rgba(255, 255, 255, 0.8);
    border: 1px solid #eaeafb;
    border-radius: 20px;
    padding: 28px;
    box-shadow: 0 18px 38px rgba(26, 23, 52, 0.1);
}
.glass-input {
    border: 1px solid rgba(32, 39, 85, 0.16);
    border-radius: 12px;
    height: 48px;
    background: #fff;
}
.glass-btn {
    height: 48px;
    width: 100%;
    border: 0;
    border-radius: 12px;
    color: #fff;
    font-weight: 700;
    background: linear-gradient(90deg, #00b8d9 0%, #6259ff 100%);
}
</style>
@endsection

@section('content')
<div class="page-content">
    <div class="reset-shell">
        <div class="reset-card">
            <h2 class="m-b10">Set New Password</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-b0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email', $email) }}" class="form-control glass-input" required>
                </div>

                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="password" class="form-control glass-input" required>
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control glass-input" required>
                </div>

                <button type="submit" class="glass-btn">Reset Password</button>
            </form>
        </div>
    </div>
</div>
@endsection
