<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="BeautyZone : Beauty Salon">
    <meta property="og:title" content="BeautyZone : Beauty Salon">
    <meta property="og:description" content="BeautyZone : Beauty Salon">
    <meta property="og:image" content="http://beautyzone.Shivatechdigital.com/xhtml/error-404.html">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="{{ asset('beauty_salon/images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('beauty_salon/images/favicon.png') }}">
    <title>@yield('title', 'BeautyZone : Beauty Salon')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="{{ asset('beauty_salon/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('beauty_salon/js/respond.min.js') }}"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/css/templete.min.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/css/skin/skin-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/css/styleSwitcher.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    @yield('page_styles')
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>

@include('beauty_salon.partials.header')

@yield('content')

@include('beauty_salon.partials.footer')

<button class="scroltop fa fa-chevron-up"></button>
</div>

@yield('page_scripts')
</body>
</html>
