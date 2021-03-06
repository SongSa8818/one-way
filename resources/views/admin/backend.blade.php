<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/modules/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">

    <link rel="stylesheet" href="{{asset('dist/modules/summernote/summernote-lite.css')}}">
    <link rel="stylesheet" href="{{asset('dist/modules/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/custom.css')}}">

</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit"><i class="ion ion-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Notifications
                            <div class="float-right">
                                <a href="#">View All</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                                <div class="dropdown-item-desc">
                                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                    <div class="time">10 Hours Ago</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                        <i class="ion ion-android-person d-lg-none"></i>
                        <div class="d-sm-none d-lg-inline-block">Hi, {{ @Auth::user()->full_name }}</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('user.edit', @Auth::user()->id) }}" class="dropdown-item has-icon">
                            <i class="ion ion-android-person"></i> Profile
                        </a>
                        <a href="#" class="dropdown-item has-icon" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                            <i class="ion ion-log-out"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <?php  $uri = Route::currentRouteName() ?>

        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{ route('home') }}">One Way Realty</a>
                </div>
                <div class="sidebar-user">
                    <div class="sidebar-user-picture">
                        <img alt="image" src="{{ url('/uploads/profiles/'.@Auth::user()->picture) }}">
                    </div>
                    <div class="sidebar-user-details">
                        <div class="user-name">{{ @Auth::user()->full_name }}</div>
                        <div class="user-role">
                            {{ @Auth::user()->role }}
                        </div>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li>
                        <a href="{{ route('home') }}"><i class="ion ion-wifi"></i><span>Visit Site</span></a>
                    </li>
                    @if(@Auth::user()->role == "Admin")
                    <li class="{{ $uri == 'dashboard.index'?'active':'' }}">
                        <a href="{{ route('dashboard.index') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
                    </li>
                    <li class="{{ in_array($uri, array('showing.list','property.list','property.create','image.edit','image.create','offer.offerList'))?'active':'' }}">
                        <a class="has-dropdown" href=""><i class="ion ion-home"></i><span>Properties</span></a>
                        <ul class="menu-dropdown">
                            <li class="{{ in_array($uri, array('property.list','property.create','image.edit','image.create'))?'active':'' }}">
                                <a href="{{ route('property.list') }}"><i class="ion ion-ios-home-outline"></i><span>All</span></a>
                            </li>
                            <li class="{{ in_array($uri, array('offer.offerList'))?'active':'' }}">
                                <a href="{{ route('offer.offerList') }}"><i class="ion ion-social-usd"></i><span>Offer</span></a>
                            </li>
                            <li class="{{ in_array($uri, array('showing.list'))?'active':'' }}">
                                <a href="{{ route('showing.list') }}"><i class="ion ion-eye"></i><span>Showing</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ in_array($uri, array('request-list','request'))?'active':'' }}">
                        <a href="{{ route('request.list') }}"><i class="ion ion-email-unread"></i><span>Request Info</span></a>
                    </li>
                    <li class="{{ in_array($uri, array('/contact/1/edit','contact'))?'active':'' }}">
                        <a href="{{ route('contact.edit', 1) }}"><i class="ion ion-ios-telephone"></i><span>Contact us</span></a>
                    </li>
                    <li class="{{ in_array($uri, array('/about/1/edit','about'))?'active':'' }}">
                        <a href="{{ route('about.edit', 1) }}"><i class="ion ion-clipboard"></i><span>About us</span></a>
                    </li>
                    <li class="{{ in_array($uri, array('user.index','user.edit'))?'active':'' }}">
                        <a href="{{ route('user.index') }}"><i class="ion ion-ios-contact-outline"></i><span>Users</span></a>
                    </li>
                    <li class="{{ in_array($uri,array(
                            'city.index','city.create','city.edit',
                            'khan.index','khan.create','khan.edit',
                            'sangkat.index','sangkat.create','sangkat.edit',
                            'village.index','village.create','village.edit'
                        ))?'active':'' }}">
                        <a href="#" class="has-dropdown"><i class="ion ion-location"></i><span>Parameters</span></a>
                        <ul class="menu-dropdown">
                            <li class="{{ in_array($uri,array('city.index','city.create','city.edit'))?'active':'' }}"><a href="{{ route('city.index') }}"><i class="ion ion-ios-location-outline"></i> City</a></li>
                            <li class="{{ in_array($uri,array('khan.index','khan.create','khan.edit'))?'active':'' }}"><a href="{{ route('khan.index') }}"><i class="ion ion-ios-location-outline"></i> Khan</a></li>
                            <li class="{{ in_array($uri,array('sangkat.index','sangkat.create','sangkat.edit'))?'active':'' }}"><a href="{{ route('sangkat.index') }}"><i class="ion ion-ios-location-outline"></i> Sangkat</a></li>
                            <li class="{{ in_array($uri,array('village.index','village.create','village.edit'))?'active':'' }}"><a href="{{ route('village.index') }}"><i class="ion ion-ios-location-outline"></i> Village</a></li>
                        </ul>
                    </li>
                        <li class="{{ in_array($uri, array('slideshow-list','slideshow'))?'active':'' }}">
                        <a href="{{ route('slideshow.list') }}"><i class="ion ion-laptop"></i><span>Slideshow Image</span></a>
                    </li>
                    @endif
                    @if(@Auth::user()->role == "Agency")
                        <li class="{{ in_array($uri, array('user.index','user.edit'))?'active':'' }}">
                            <a href="{{ route('user.index') }}"><i
                                        class="ion ion-ios-contact-outline"></i><span>Users</span></a>
                        </li>
                    @endif
                </ul>
            </aside>
        </div>
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2019 <div class="bullet"></div> Design By <a href="http://onewayrealtymanagement.com/">One Way Realty</a>
            </div>
            <div class="footer-right"></div>
        </footer>
    </div>
</div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('dist/modules/popper.js')}}"></script>
<script src="{{asset('dist/modules/tooltip.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
<script src="{{asset('dist/js/sa-functions.js')}}"></script>
<script src="{{asset('dist/js/scripts.js')}}"></script>
<script src="{{asset('dist/js/custom.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>

<!-- Location picker -->
<script type="text/javascript"
        src='http://maps.google.com/maps/api/js?key=AIzaSyCA4Ukxfg33boz0seOAO87i9eZYJvyffDk&sensor=false&libraries=places'></script>
<script src="http://rawgit.com/Logicify/jquery-locationpicker-plugin/master/dist/locationpicker.jquery.js"></script>

<script>
    var token = '{{ \Illuminate\Support\Facades\Session::token() }}';

    $('#mapsProperty').locationpicker({
        location: {
            latitude: 11.562859,
            longitude: 104.915590
        },
        inputBinding: {
            latitudeInput: $('#pro-lat'),
            longitudeInput: $('#pro-lon'),
            locationNameInput: $('#pro-address')
        },
        enableAutocomplete: true
    });

    $(document).ready(function() {
        // $('#khan_id option').remove();
        // $('#sangkat_id option').remove();
        // $('#village_id option').remove();
        $('#city_id').on('change', function() {
            var data = {
                'city_id': $(this).val(),
                _token: token
            };
            //console.log(data);
            $.post('{{ route("ajax.khans_select") }}', data, function(resultKhans, textStatus, xhr) {
                /*optional stuff to do after success */
                //console.log(resultKhans.length);
                $('#khan_id option').remove();
                //resultKhans.length > 0?$('#khan_id').prop('disabled', false):$('#khan_id').prop('disabled', true);
                for (i in resultKhans) {
                    $('#khan_id').append('<option value="'+ resultKhans[i].id +'">'+ resultKhans[i].name +'</option>');
                }
            });
        });
        $('#khan_id').on('change', function() {
            var data = {
                'khan_id': $(this).val(),
                _token: token
            };
            $.post('{{ route("ajax.sangkats_select") }}', data, function(resultSangkats, textStatus, xhr) {
                $('#sangkat_id option').remove();
                //resultSangkats.length > 0 ? $('#sangkat_id').prop('disabled', false) : $('#sangkat_id').prop('disabled', true);
                for (i in resultSangkats) {
                    $('#sangkat_id').append('<option value="'+ resultSangkats[i].id +'">'+ resultSangkats[i].name +'</option>');
                }
            });
        });
        $('#sangkat_id').on('change', function() {
            var data = {
                'sangkat_id': $(this).val(),
                _token: token
            };
            $.post('{{ route("ajax.villages_select") }}', data, function(resultVillages, textStatus, xhr) {
                $('#village_id option').remove();
                //resultVillages.length > 0 ? $('#village_id').prop('disabled', false) : $('#village_id').prop('disabled', true);
                for (i in resultVillages) {
                    $('#village_id').append('<option value="'+ resultVillages[i].id +'">'+ resultVillages[i].name +'</option>');
                }
            });
        });
    });
</script>

</body>
</html>