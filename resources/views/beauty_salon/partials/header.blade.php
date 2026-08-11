@php
    $isHome = request()->routeIs('beauty_salon.index');
    $isAbout = request()->routeIs('beauty_salon.about-us');
    $isService = request()->routeIs('beauty_salon.service') || request()->routeIs('beauty_salon.services-details');
    $isPortfolio = request()->routeIs('beauty_salon.portfolio-grid-2');
    $isBlog = request()->routeIs('beauty_salon.blog-*') || request()->routeIs('beauty_salon.post-*');
    $isContact = request()->routeIs('beauty_salon.contact');
    $isMore = request()->routeIs('beauty_salon.booking') || request()->routeIs('beauty_salon.team') || request()->routeIs('beauty_salon.login') || request()->routeIs('beauty_salon.register') || request()->routeIs('dashboard') || request()->routeIs('admin.dashboard') || request()->routeIs('user.dashboard');
@endphp

<header class="site-header header mo-left">
    <div class="top-bar bg-primary text-white">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="dlab-topbar-left">
                    <ul>
                        <li><i class="fa fa-phone m-r5"></i> +91 7007294764</li>
                        <li><i class="fa fa-map-marker m-r5"></i> 97 C Block Panki Kanpur</li>
                    </ul>
                </div>
                <div class="dlab-topbar-right topbar-social">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/" class="site-button-link google-plus hover"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/" class="site-button-link linkedin hover"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/" class="site-button-link youtube hover"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <div class="logo-header mostion">
                    <a href="{{ route('beauty_salon.index') }}" class="dez-page"><img src="{{ asset('beauty_salon/images/logo-2.png') }}" alt=""></a>
                </div>
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="nav navbar-nav">
                        <li class="{{ $isHome ? 'active' : '' }}"><a href="{{ route('beauty_salon.index') }}">Home</a></li>
                        <li class="{{ $isAbout ? 'active' : '' }}"><a href="{{ route('beauty_salon.about-us') }}" class="dez-page">About Us</a></li>
                        <li class="{{ $isService ? 'active' : '' }}"><a href="{{ route('beauty_salon.service') }}" class="dez-page">Services</a></li>
                        <li class="{{ $isPortfolio ? 'active' : '' }}"><a href="{{ route('beauty_salon.portfolio-grid-2') }}" class="dez-page">Portfolio</a></li>
                        <li class="{{ $isBlog ? 'active' : '' }}"><a href="{{ route('beauty_salon.blog-grid') }}">Blog</a></li>
                        <li class="{{ $isContact ? 'active' : '' }}"><a href="{{ route('beauty_salon.contact') }}">Contact</a></li>
                        <li class="{{ $isMore ? 'active' : '' }}"><a href="javascript:void(0);">More <i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('beauty_salon.booking') }}" class="dez-page">Booking</a></li>
                                <li><a href="{{ route('beauty_salon.team') }}" class="dez-page">Our Team</a></li>
                                @guest
                                    <li><a href="{{ route('beauty_salon.login') }}" class="dez-page">Login</a></li>
                                    <li><a href="{{ route('beauty_salon.register') }}" class="dez-page">Sign Up</a></li>
                                @endguest
                                @auth
                                    <li>
                                        <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="dez-page">Dashboard</a>
                                    </li>
                                    <li>
                                        <form method="post" action="{{ route('auth.logout') }}" style="padding: 10px 20px;">
                                            @csrf
                                            <button type="submit" style="border:none;background:transparent;color:#111;font-weight:600;cursor:pointer;padding:0;">Logout</button>
                                        </form>
                                    </li>
                                @endauth
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
