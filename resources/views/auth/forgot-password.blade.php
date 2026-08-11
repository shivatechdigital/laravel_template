@extends('beauty_salon.layouts.app')

@section('title', 'Forgot Password | BeautyZone')

@section('page_styles')
<style>
.forgot-shell {
    min-height: 70vh;
    display: grid;
    place-items: center;
    background: linear-gradient(140deg, #f5fbff 0%, #fff7fc 100%);
}
.forgot-card {
    width: min(520px, 94vw);
    background: rgba(255, 255, 255, 0.8);
    border: 1px solid #eaeafb;
    border-radius: 20px;
    padding: 28px;
    box-shadow: 0 18px 38px rgba(26, 23, 52, 0.1);
}
.forgot-card h2 { margin: 0 0 8px; }
.forgot-card p { color: #6c739b; margin-bottom: 18px; }
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
    background: linear-gradient(90deg, #ff4a9b 0%, #7e54ff 100%);
}
</style>
@endsection

@section('content')
<div class="page-content">
    <div class="forgot-shell">
        <div class="forgot-card">
            <h2>Reset Password</h2>
            <p>Enter your account email. We will send you a password reset link.</p>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-b0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control glass-input" required>
                </div>
                <button type="submit" class="glass-btn">Send Reset Link</button>
            </form>
        </div>
    </div>
</div>
@endsection
