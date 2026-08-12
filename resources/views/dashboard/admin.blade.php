<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | BeautyZone</title>
    <style>
        :root {
            --bg-1: #eef6ff;
            --bg-2: #fff5fb;
            --ink: #1b2140;
            --muted: #5f6589;
            --line: rgba(255,255,255,0.55);
            --glass: rgba(255,255,255,0.38);
            --pink: #ff4a9b;
            --blue: #4f6bff;
            --teal: #14b8a6;
            --amber: #f59e0b;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at 12% 14%, rgba(255, 74, 155, 0.18), transparent 30%),
                radial-gradient(circle at 90% 84%, rgba(79, 107, 255, 0.22), transparent 30%),
                linear-gradient(140deg, var(--bg-1), var(--bg-2));
            min-height: 100vh;
        }

        .wrap {
            display: grid;
            grid-template-columns: 270px 1fr;
            min-height: 100vh;
        }

        .side {
            background: rgba(20, 23, 48, 0.75);
            border-right: 1px solid rgba(255,255,255,0.12);
            backdrop-filter: blur(18px);
            padding: 26px 20px;
            color: #f4f7ff;
        }

        .brand {
            display: flex;
            gap: 10px;
            align-items: center;
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 26px;
        }

        .pill {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: linear-gradient(140deg, #ff4a9b, #6d63ff);
        }

        .nav a {
            display: block;
            text-decoration: none;
            color: #dde5ff;
            padding: 12px 14px;
            border-radius: 12px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .nav a.active,
        .nav a:hover { background: rgba(255,255,255,0.14); }

        .main { padding: 22px; }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--glass);
            border: 1px solid var(--line);
            border-radius: 18px;
            backdrop-filter: blur(16px);
            padding: 12px 18px;
            margin-bottom: 20px;
        }

        .welcome h2 { margin: 0; }
        .welcome p { margin: 4px 0 0; color: var(--muted); }

        .logout-btn {
            border: 0;
            color: #fff;
            font-weight: 700;
            border-radius: 10px;
            padding: 10px 16px;
            cursor: pointer;
            background: linear-gradient(90deg, #ff4a9b, #615dff);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, minmax(150px, 1fr));
            gap: 16px;
            margin-bottom: 18px;
        }

        .card {
            background: var(--glass);
            border: 1px solid var(--line);
            border-radius: 18px;
            backdrop-filter: blur(16px);
            padding: 18px;
        }

        .card h6 { margin: 0; color: var(--muted); font-size: 12px; text-transform: uppercase; letter-spacing: 0.7px; }
        .card p { margin: 10px 0 0; font-size: 34px; font-weight: 800; }

        .grid {
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 16px;
        }

        .panel {
            background: var(--glass);
            border: 1px solid var(--line);
            border-radius: 18px;
            backdrop-filter: blur(16px);
            padding: 16px;
        }

        .panel h4 { margin: 0 0 12px; }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th, td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid rgba(27,33,64,0.08);
        }

        .status {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 999px;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
        }

        .pending { background: var(--amber); }
        .approved { background: var(--teal); }
        .rejected { background: #ef4444; }

        .quick-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .quick-list li {
            background: rgba(255,255,255,0.6);
            border: 1px solid rgba(27,33,64,0.08);
            border-radius: 12px;
            padding: 12px;
            margin-bottom: 10px;
        }

        .status-actions {
            display: flex;
            gap: 6px;
            margin-top: 6px;
        }

        .status-actions button {
            border: 0;
            border-radius: 8px;
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            padding: 4px 8px;
            cursor: pointer;
        }

        .btn-approve { background: #14b8a6; }
        .btn-reject { background: #ef4444; }
        .btn-pending { background: #f59e0b; }

        .meta { color: var(--muted); font-size: 13px; }

        @media (max-width: 1024px) {
            .wrap { grid-template-columns: 1fr; }
            .side { display: none; }
            .cards { grid-template-columns: repeat(2, minmax(150px, 1fr)); }
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="wrap">
        <aside class="side">
            <div class="brand"><span class="pill"></span> BeautyZone</div>
            <nav class="nav">
                <a class="active" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a href="{{ route('admin.services.index') }}">Manage Services</a>
                <a href="{{ route('admin.pricing.index') }}">Manage Pricing</a>
                <a href="{{ route('admin.memberships.index') }}">Manage Memberships</a>
                <a href="{{ route('admin.billing.create') }}">Create Bill</a>
                <a href="{{ route('admin.billing.index') }}">Billing History</a>
                <a href="{{ route('admin.gallery.index') }}">Manage Gallery</a>
                <a href="{{ route('admin.team-members.index') }}">Manage Team Members</a>
                <a href="{{ route('admin.social-links.index') }}">Manage Social Links</a>
                <a href="{{ route('admin.content-blocks.index') }}">Manage Content Blocks</a>
                <a href="{{ route('admin.pages.index') }}">Edit Page Templates</a>
                <a href="{{ route('beauty_salon.booking') }}">Create Booking</a>
                <a href="{{ route('beauty_salon.index') }}">Visit Website</a>
            </nav>
        </aside>

        <main class="main">
            <div class="top">
                <div class="welcome">
                    <h2>Admin Dashboard</h2>
                    <p>Monitor users, bookings, and platform activity.</p>
                </div>
                <form method="post" action="{{ route('auth.logout') }}">
                    @csrf
                    <button class="logout-btn" type="submit">Logout</button>
                </form>
            </div>

            @if (session('success'))
                <div style="background:#dcfce7;border:1px solid #86efac;border-radius:12px;padding:10px 14px;margin-bottom:16px;color:#166534;font-weight:600;">
                    {{ session('success') }}
                </div>
            @endif

            <section class="cards">
                <article class="card">
                    <h6>Total Users</h6>
                    <p>{{ $totalUsers }}</p>
                </article>
                <article class="card">
                    <h6>Admins</h6>
                    <p>{{ $totalAdmins }}</p>
                </article>
                <article class="card">
                    <h6>Total Bookings</h6>
                    <p>{{ $totalBookings }}</p>
                </article>
                <article class="card">
                    <h6>Pending</h6>
                    <p>{{ $pendingBookings }}</p>
                </article>
            </section>

            <section class="grid">
                <div class="panel">
                    <h4>Recent Bookings</h4>
                    <div style="overflow:auto;">
                        <table>
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Service</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recentBookings as $booking)
                                    <tr>
                                        <td>
                                            <strong>{{ $booking->customer_name }}</strong>
                                            <div class="meta">{{ $booking->customer_email }}</div>
                                        </td>
                                        <td>{{ ucwords(str_replace('-', ' ', $booking->service)) }}</td>
                                        <td>{{ $booking->appointment_date->format('d M Y') }} {{ $booking->appointment_time }}</td>
                                        <td>
                                            <span class="status {{ $booking->status }}">{{ ucfirst($booking->status) }}</span>
                                            <div class="status-actions">
                                                <form method="post" action="{{ route('admin.bookings.status', $booking) }}">
                                                    @csrf
                                                    <input type="hidden" name="status" value="approved">
                                                    <button type="submit" class="btn-approve">Approve</button>
                                                </form>
                                                <form method="post" action="{{ route('admin.bookings.status', $booking) }}">
                                                    @csrf
                                                    <input type="hidden" name="status" value="rejected">
                                                    <button type="submit" class="btn-reject">Reject</button>
                                                </form>
                                                <form method="post" action="{{ route('admin.bookings.status', $booking) }}">
                                                    @csrf
                                                    <input type="hidden" name="status" value="pending">
                                                    <button type="submit" class="btn-pending">Pending</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No booking records found yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="panel">
                    <h4>Quick Highlights</h4>
                    <ul class="quick-list">
                        <li>
                            <strong>Content Management</strong>
                            <div class="meta"><a href="{{ route('admin.services.index') }}">Services</a> | <a href="{{ route('admin.pricing.index') }}">Pricing</a> | <a href="{{ route('admin.memberships.index') }}">Memberships</a> | <a href="{{ route('admin.billing.create') }}">Create Bill</a> | <a href="{{ route('admin.billing.index') }}">Billing History</a> | <a href="{{ route('admin.gallery.index') }}">Gallery</a> | <a href="{{ route('admin.team-members.index') }}">Team</a> | <a href="{{ route('admin.social-links.index') }}">Social Links</a> | <a href="{{ route('admin.content-blocks.index') }}">Content Blocks</a></div>
                        </li>
                        <li>
                            <strong>Pending Queue</strong>
                            <div class="meta">{{ $pendingBookings }} booking requests need review.</div>
                        </li>
                        <li>
                            <strong>User Growth</strong>
                            <div class="meta">{{ $totalUsers }} registered customers in system.</div>
                        </li>
                        <li>
                            <strong>Team Access</strong>
                            <div class="meta">{{ $totalAdmins }} admin account(s) currently active.</div>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
