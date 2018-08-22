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
    <?php $uri = Route::getCurrentRoute()->uri() ?>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @if ($uri == '/')
        <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
    @elseif($uri == 'exclusive' || $uri == 'showing' || $uri == 'request' || $uri == 'offer')
        <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/elements_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_responsive.css')}}">
    @elseif($uri == 'about')
        <link rel="stylesheet" type="text/css" href="{{asset('styles/about_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">
    @elseif($uri == 'contact')
        <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_styles.css')}}">
    @elseif($uri == 'contact')
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/magnific-popup/magnific-popup.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_single_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_single_responsive.css')}}">
    @elseif($uri == 'property')
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/magnific-popup/magnific-popup.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_single_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/listings_single_responsive.css')}}">
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
            @include('layouts.menu', ['menus' => array("home" => "Home", "exclusive.index" => "Exclusive", "showing.index" => "Showing", "offer.index" => "Offer", "request.index" =>"Request","contact.index" =>"Contact", "about.index" => "About Us")])
        </header>

        @yield('content')

        @include('layouts.footer')

    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmPop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h3></h3>
                </div>
                <div class="modal-footer">
                    <button type="button" id="buttonNo" class="btn btn-secondary w-100 btn-lg" data-dismiss="modal">No</button>
                    <button type="button" id="buttonYes" class="btn btn-primary w-100 btn-lg">Yes</button>
                </div>
            </div>
        </div>
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
    @if($uri == 'about')
        <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
        <script src="{{asset('js/about_custom.js')}}"></script>
    @elseif($uri == 'contact')
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
        <script src="{{asset('js/contact_custom.js')}}"></script>
    @elseif($uri == 'property')
        <script src="{{asset('plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA4Ukxfg33boz0seOAO87i9eZYJvyffDk&callback=initMap&libraries=places"></script>
        <script src="{{asset('js/listings_single_custom.js')}}"></script>

        <script>
            // This example displays a marker at the center of Australia.
            // When the user clicks the marker, an info window opens.

            function initMap() {
                var uluru = {lat: 11.586696, lng: 104.902523};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 18,
                    center: uluru
                });

                var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Gingerbread_House_Essex_CT.jpg/220px-Gingerbread_House_Essex_CT.jpg" />'+
                    '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
                    '<div id="bodyContent">'+
                    '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                    'sandstone rock formation in the southern part of the '+
                    'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
                    'south west of the nearest large town, Alice Springs; 450&#160;km '+
                    '(280&#160;mi) by road.</p>'+
                    '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                    'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
                    '(last visited June 22, 2009).</p>'+
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

    <script>
        var token = '{{ \Illuminate\Support\Facades\Session::token() }}';
        var url = '';
        function initConfirmModal(message, action) {
            $('#confirmPop').modal('show');
            $('#confirmPop .modal-content h3').text(message);
            url = action;
            $('#confirmPop #buttonYes').click(function (e) {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: { id: 7, _token: token },
                    cache: false,
                }).done(function( msg ) {
                    $('#confirmPop').modal('hide');
                });
            });
        }
    </script>

</body>
</html>
