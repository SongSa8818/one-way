<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The Estate Teplate">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_responsive.css')}}">

    @if (Route::getCurrentRoute()->uri() == '/')
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
    @elseif(Route::getCurrentRoute()->uri() == 'exclusive')
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_responsive.css')}}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('css/customize.css')}}">

</head>
<body>

    <div class="super_container">
        @if (Route::getCurrentRoute()->uri() == '/')
            <!-- Home -->
            @include('layouts.slider')
        @else
            @include('layouts.headersingle')
        @endif
        <!-- Header -->
        <header class="header trans_300">
            @include('layouts.menu', ['menus' => array("/" => "Home", "exclusive" => "Exclusive", "Request","Contact", "About")])
        </header>

        @yield('content')

        @include('layouts.footer')

    </div>

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('plugins/easing/easing.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
