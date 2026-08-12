<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin CMS')</title>
    <style>
        :root {
            --bg-1: #eef6ff;
            --bg-2: #fff5fb;
            --ink: #1b2140;
            --muted: #5f6589;
            --line: rgba(255,255,255,0.55);
            --glass: rgba(255,255,255,0.45);
            --pink: #ff4a9b;
            --blue: #4f6bff;
            --teal: #14b8a6;
            --danger: #ef4444;
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
            padding: 11px 13px;
            border-radius: 12px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .nav a:hover,
        .nav a.active {
            background: rgba(255,255,255,0.14);
        }

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
            gap: 10px;
        }

        .card {
            background: var(--glass);
            border: 1px solid var(--line);
            border-radius: 18px;
            backdrop-filter: blur(16px);
            padding: 16px;
        }

        .btn {
            border: 0;
            color: #fff;
            font-weight: 700;
            border-radius: 10px;
            padding: 9px 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            background: linear-gradient(90deg, #ff4a9b, #615dff);
        }

        .btn-secondary {
            background: linear-gradient(90deg, #4f6bff, #14b8a6);
        }

        .btn-danger {
            background: var(--danger);
        }

        input[type="text"],
        input[type="number"],
        input[type="url"],
        input[type="file"],
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid rgba(27,33,64,0.18);
            border-radius: 10px;
            font: inherit;
            background: rgba(255,255,255,0.9);
        }

        textarea { min-height: 130px; }

        .field { margin-bottom: 14px; }
        .field label { display: block; font-weight: 600; margin-bottom: 6px; }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid rgba(27,33,64,0.08);
            vertical-align: top;
        }

        .flash {
            background: #dcfce7;
            border: 1px solid #86efac;
            border-radius: 12px;
            padding: 10px 14px;
            margin-bottom: 16px;
            color: #166534;
            font-weight: 600;
        }

        .error-box {
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 12px;
            padding: 10px 14px;
            margin-bottom: 16px;
            color: #991b1b;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        @media (max-width: 1024px) {
            .wrap { grid-template-columns: 1fr; }
            .side { display: none; }
            .grid-2 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
<div class="wrap">
    <aside class="side">
        <div class="brand"><span class="pill"></span> BeautyZone</div>
        <nav class="nav">
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}">Services</a>
            <a href="{{ route('admin.pricing.index') }}" class="{{ request()->routeIs('admin.pricing.*') ? 'active' : '' }}">Pricing</a>
            <a href="{{ route('admin.memberships.index') }}" class="{{ request()->routeIs('admin.memberships.*') ? 'active' : '' }}">Memberships</a>
            <a href="{{ route('admin.billing.index') }}" class="{{ request()->routeIs('admin.billing.*') ? 'active' : '' }}">Billing</a>
            <a href="{{ route('admin.gallery.index') }}" class="{{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">Gallery</a>
            <a href="{{ route('admin.team-members.index') }}" class="{{ request()->routeIs('admin.team-members.*') ? 'active' : '' }}">Team Members</a>
            <a href="{{ route('admin.social-links.index') }}" class="{{ request()->routeIs('admin.social-links.*') ? 'active' : '' }}">Social Links</a>
            <a href="{{ route('admin.content-blocks.index') }}" class="{{ request()->routeIs('admin.content-blocks.*') ? 'active' : '' }}">Content Blocks</a>
            <a href="{{ route('admin.pages.index') }}" class="{{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">Page Templates</a>
            <a href="{{ route('beauty_salon.index') }}">Visit Website</a>
        </nav>
    </aside>

    <main class="main">
        <div class="top">
            <div>
                <h2 style="margin:0;">@yield('heading', 'Admin CMS')</h2>
                <p style="margin:4px 0 0;color:var(--muted);">Manage dynamic website content from one panel.</p>
            </div>
            <form method="post" action="{{ route('auth.logout') }}">
                @csrf
                <button class="btn" type="submit">Logout</button>
            </form>
        </div>

        @if (session('success'))
            <div class="flash">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="error-box">
                <strong>Please fix the following:</strong>
                <ul style="margin:8px 0 0 16px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</div>
</body>
</html>
