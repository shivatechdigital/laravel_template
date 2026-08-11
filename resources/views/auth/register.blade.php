@extends('beauty_salon.layouts.app')

@section('title', 'Sign Up | BeautyZone')

@section('page_styles')
<style>
.page-content{
    margin-top: 0;
    padding-bottom: 0px !important;
}
.register-shell {
    padding: 70px 0px;
    min-height: 75vh;
    display: grid;
    place-items: center;
    background:
        radial-gradient(circle at 85% 10%, rgba(56, 189, 248, 0.24), transparent 28%),
        radial-gradient(circle at 10% 85%, rgba(251, 113, 133, 0.25), transparent 32%),
        linear-gradient(135deg, #f6fbff 0%, #fff9fc 100%);
}
.register-card {
    width: min(620px, 94vw);
    padding: 30px;
    border-radius: 24px;
    border: 1px solid rgba(255, 255, 255, 0.7);
    background: rgba(255, 255, 255, 0.43);
    backdrop-filter: blur(16px);
    box-shadow: 0 24px 52px rgba(26, 23, 52, 0.13);
}
.register-title {
    font-size: 30px;
    font-weight: 800;
    color: #1e2142;
}
.register-subtitle {
    color: #5d6288;
    margin-bottom: 20px;
}
.glass-input {
    border: 1px solid rgba(32, 39, 85, 0.16);
    border-radius: 12px;
    height: 48px;
    background: rgba(255, 255, 255, 0.75);
}
.glass-btn {
    height: 48px;
    width: 100%;
    border: 0;
    border-radius: 12px;
    color: #fff;
    font-weight: 700;
    background: linear-gradient(90deg, #00b8d9 0%, #6259ff 100%);
    box-shadow: 0 10px 22px rgba(98, 89, 255, 0.35);
}
.admin-code-wrap { display: none; }
.auth-helper { text-align: center; margin-top: 16px; }
.auth-helper a { color: #2c4cff; font-weight: 700; }
</style>
@endsection

@section('content')
<div class="page-content">
    <div class="register-shell">
        <div class="register-card">
            <div class="register-title">Create Account</div>
            <div class="register-subtitle">Choose account type and get started.</div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-b0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('auth.register.submit') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control glass-input" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control glass-input" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control glass-input" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control glass-input" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Account Type</label>
                        <select class="form-control glass-input" name="role" id="roleSelect" required>
                            <option value="user" @selected(old('role', 'user') === 'user')>User</option>
                            <option value="admin" @selected(old('role') === 'admin')>Admin</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group admin-code-wrap" id="adminCodeWrap">
                        <label>Admin Registration Code</label>
                        <input type="text" name="admin_code" value="{{ old('admin_code') }}" class="form-control glass-input" placeholder="Enter admin code">
                    </div>
                </div>

                <button type="submit" class="glass-btn">Create Account</button>
            </form>

            <div class="auth-helper">
                Already have an account?
                <a href="{{ route('beauty_salon.login') }}">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<script>
(function () {
    const roleSelect = document.getElementById('roleSelect');
    const adminWrap = document.getElementById('adminCodeWrap');

    if (!roleSelect || !adminWrap) return;

    const toggleAdminCode = () => {
        adminWrap.style.display = roleSelect.value === 'admin' ? 'block' : 'none';
    };

    roleSelect.addEventListener('change', toggleAdminCode);
    toggleAdminCode();
})();
</script>
<script src="{{ asset('beauty_salon/js/styleSwitcher.js') }}"></script>
@endsection
