@extends('beauty_salon.layouts.app')

@section('title', 'My Dashboard | BeautyZone')

@section('page_styles')
<style>
.user-dash {
    background: linear-gradient(135deg, #f7fcff 0%, #fff7fa 100%);
    min-height: 80vh;
    padding: 40px 0;
}
.panel-card {
    background: #fff;
    border: 1px solid #ececf8;
    border-radius: 16px;
    box-shadow: 0 12px 24px rgba(26, 23, 52, 0.08);
}
.summary-chip {
    border-radius: 14px;
    padding: 18px;
    color: #fff;
}
.summary-chip h6 { margin: 0; opacity: 0.9; }
.summary-chip p { margin: 6px 0 0; font-size: 28px; font-weight: 800; }
</style>
@endsection

@section('content')
<div class="page-content user-dash">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center m-b30">
            <div>
                <h2 class="m-b5">Hello, {{ auth()->user()->name }}</h2>
                <p class="m-b0 text-muted">Track your bookings and manage your account.</p>
            </div>
            <div style="display:flex;gap:10px;">
                <a href="{{ route('beauty_salon.memberships') }}" class="site-button-secondry">View Membership Plans</a>
                <a href="{{ route('beauty_salon.booking') }}" class="site-button">New Booking</a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row m-b20">
            <div class="col-md-4 m-b15">
                <div class="summary-chip" style="background:linear-gradient(90deg,#ff4a9b,#8b5cf6);">
                    <h6>Total Bookings</h6>
                    <p>{{ $bookings->count() }}</p>
                </div>
            </div>
            <div class="col-md-4 m-b15">
                <div class="summary-chip" style="background:linear-gradient(90deg,#06b6d4,#3b82f6);">
                    <h6>Pending</h6>
                    <p>{{ $bookings->where('status', 'pending')->count() }}</p>
                </div>
            </div>
            <div class="col-md-4 m-b15">
                <div class="summary-chip" style="background:linear-gradient(90deg,#22c55e,#14b8a6);">
                    <h6>Approved</h6>
                    <p>{{ $bookings->where('status', 'approved')->count() }}</p>
                </div>
            </div>
        </div>

        <div class="panel-card p-4">
            <h4 class="m-b20">My Bookings</h4>

            @if ($bookings->isEmpty())
                <p class="text-muted m-b0">No bookings yet. Click New Booking to create your first appointment.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Service</th>
                                <th>Category</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->appointment_date->format('d M Y') }}</td>
                                    <td>{{ $booking->appointment_time }}</td>
                                    <td>{{ ucwords(str_replace('-', ' ', $booking->service)) }}</td>
                                    <td>{{ ucwords($booking->category) }}</td>
                                    <td>
                                        <span class="badge badge-{{ $booking->status === 'approved' ? 'success' : ($booking->status === 'rejected' ? 'danger' : 'warning') }}">
                                            {{ ucfirst($booking->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <div class="panel-card p-4 m-t30">
            <h4 class="m-b20">My Memberships</h4>

            @if ($memberships->isEmpty())
                <p class="text-muted m-b0">No memberships yet. Visit membership plans and purchase one.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Plan</th>
                                <th>Start Date</th>
                                <th>Expiry Date</th>
                                <th>Final Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($memberships as $membership)
                                @php($resolvedStatus = $membership->resolved_status)
                                <tr>
                                    <td>{{ $membership->membershipPlan?->name ?: 'Plan' }}</td>
                                    <td>{{ $membership->starts_at?->format('d M Y') }}</td>
                                    <td>{{ $membership->expires_at?->format('d M Y') }}</td>
                                    <td>Rs. {{ number_format((float) $membership->final_price, 2) }}</td>
                                    <td>
                                        <span class="badge badge-{{ $resolvedStatus === 'active' ? 'success' : ($resolvedStatus === 'expired' ? 'danger' : 'secondary') }}">
                                            {{ ucfirst($resolvedStatus) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <div class="row m-t30">
            <div class="col-lg-6 m-b20">
                <div class="panel-card p-4 h-100">
                    <h4 class="m-b20">Update Profile</h4>

                    @if (session('profile_success'))
                        <div class="alert alert-success">{{ session('profile_success') }}</div>
                    @endif

                    <form method="post" action="{{ route('user.profile.update') }}">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
                        </div>
                        <button class="site-button" type="submit">Save Profile</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 m-b20">
                <div class="panel-card p-4 h-100">
                    <h4 class="m-b20">Change Password</h4>

                    @if (session('password_success'))
                        <div class="alert alert-success">{{ session('password_success') }}</div>
                    @endif

                    <form method="post" action="{{ route('user.password.update') }}">
                        @csrf
                        <div class="form-group">
                            <label>Current Password</label>
                            <input class="form-control" type="password" name="current_password" required>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input class="form-control" type="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="form-control" type="password" name="password_confirmation" required>
                        </div>
                        <button class="site-button" type="submit">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<script src="{{ asset('beauty_salon/js/styleSwitcher.js') }}"></script>
@endsection
