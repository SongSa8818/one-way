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
    <?php $uri = Route::currentRouteName() ?>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @if ($uri == 'home')
        <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
    @elseif(in_array($uri,array('exclusive.index','showing.index','offer.index','search')))
        <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_responsive.css')}}">
    @elseif($uri == 'about.index')
        <link rel="stylesheet" type="text/css" href="{{asset('styles/about_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">
    @elseif(in_array($uri, array('contact.index','user.show')))
        <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_responsive.css')}}">
    @elseif(in_array($uri, array('property.show','request.index')))
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/magnific-popup/magnific-popup.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_single_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_single_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_responsive.css')}}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('css/customize.css')}}">

    @if($uri == 'request.index')
    <script src="{{ asset('js/signature.js') }}"></script>
    @endif

</head>
<body>

    <div class="super_container">
        @if ($uri == 'home')
           @include('layouts.slider')
        @else
            @include('layouts.headersingle')
        @endif
        <!-- Header -->
        <header class="header trans_300">
            @include('layouts.menu')
        </header>

        @yield('content')

        @include('layouts.footer')

    </div>

    @if($uri == 'request.index')
    <script>
        signaturePad();
    </script>
    @endif

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
    @if($uri == 'about.index')
        <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
        <script src="{{asset('js/about_custom.js')}}"></script>
    @elseif(in_array($uri, array('property.show')))
        <script src="{{asset('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/listings_single_custom.js')}}"></script>

        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA4Ukxfg33boz0seOAO87i9eZYJvyffDk&callback=initMap&libraries=places"></script>
        <script>
            function initMap() {
                var uluru = {lat: {{ @$property->pro_lat }}, lng: {{ @$property->pro_lon }}};
                var img = '{{ url('/uploads/'.@$images[0]->img) }}';
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 18,
                    center: uluru
                });

                var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<img src="'+ img +'" />'+
                    '<h1 id="firstHeading" class="firstHeading">{{ @$property->title }}</h1>'+
                    '<div id="bodyContent">'+
                    '<p> {{ @$property->description }} </p>'+
                    '</div>'+
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                    maxWidth: 500
                });

                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title: 'Property title'
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            }
        </script>
    @endif


</body>
</html>
