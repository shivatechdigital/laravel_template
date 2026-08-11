@extends('beauty_salon.layouts.app')

@section('title', 'Login | BeautyZone')

@section('page_styles')
<style>
.page-content {
    margin-top: 0;
    padding-bottom: 0px !important;
}
.auth-shell {
    padding:70px 0px;
    min-height: 75vh;
    display: grid;
    place-items: center;
    background:
        radial-gradient(circle at 10% 20%, rgba(255, 74, 155, 0.25), transparent 35%),
        radial-gradient(circle at 90% 80%, rgba(95, 114, 255, 0.25), transparent 30%),
        linear-gradient(120deg, #f7fbff 0%, #fff7fb 55%, #f2f6ff 100%);
}
.auth-card {
    width: min(460px, 92vw);
    padding: 30px;
    border-radius: 24px;
    border: 1px solid rgba(255, 255, 255, 0.6);
    background: rgba(255, 255, 255, 0.42);
    backdrop-filter: blur(16px);
    box-shadow: 0 20px 45px rgba(26, 23, 52, 0.14);
}
.auth-title {
    font-size: 32px;
    font-weight: 800;
    color: #1e2142;
}
.auth-subtitle {
    color: #5d6288;
    margin-bottom: 24px;
}
.glass-input {
    border: 1px solid rgba(32, 39, 85, 0.16);
    border-radius: 12px;
    height: 48px;
    background: rgba(255, 255, 255, 0.7);
}
.glass-btn {
    height: 48px;
    width: 100%;
    border: 0;
    border-radius: 12px;
    color: #fff;
    font-weight: 700;
    background: linear-gradient(90deg, #ff4a9b 0%, #7e54ff 100%);
    box-shadow: 0 10px 22px rgba(126, 84, 255, 0.35);
}
.auth-helper {
    text-align: center;
    margin-top: 16px;
}
.auth-helper a {
    color: #ff2f8f;
    font-weight: 700;
}
</style>
@endsection

@section('content')
<div class="page-content">
    <div class="auth-shell">
        <div class="auth-card">
            <div class="auth-title">Welcome Back</div>
            <div class="auth-subtitle">Login to continue with your bookings and profile.</div>

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

            <form method="post" action="{{ route('auth.login.submit') }}">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control glass-input" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control glass-input" required>
                </div>

                <div class="form-group custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberMe" name="remember" value="1">
                    <label class="custom-control-label" for="rememberMe">Remember me</label>
                </div>

                <div class="text-right m-b15">
                    <a href="{{ route('password.request') }}" style="color:#5f54ff;font-weight:700;">Forgot password?</a>
                </div>

                <button type="submit" class="glass-btn">Login</button>
            </form>

            <div class="auth-helper">
                No account yet?
                <a href="{{ route('beauty_salon.register') }}">Create one</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<script src="{{ asset('beauty_salon/js/styleSwitcher.js') }}"></script>
@endsection
