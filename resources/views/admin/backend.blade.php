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
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="../dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                            <i class="ion ion-android-person d-lg-none"></i>
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ @Auth::user()->last_name }}</div></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile.html" class="dropdown-item has-icon">
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
                        <a href="index.html">One Way Realty</a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="../dist/img/avatar/avatar-1.jpeg">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name">Ujang Maman</div>
                            <div class="user-role">
                                {{ $uri }}
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="{{ $uri == 'dashboard.index'?'active':'' }}">
                            <a href="{{ route('dashboard.index') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
                        </li>
                        <li class="{{ in_array($uri, array('property.list','property.create','image.edit','image.create'))?'active':'' }}">
                            <a href="{{ route('property.list') }}"><i class="ion ion-home"></i><span>Properties</span></a>
                        </li>
                        <li class="{{ in_array($uri, array('user.index','user.edit'))?'active':'' }}">
                            <a href="{{ route('user.index') }}"><i class="ion ion-home"></i><span>Users</span></a>
                        </li>
                        <li class="{{ in_array($uri, array('customer.list','customer.edit'))?'active':'' }}">
                            <a href="{{ route('customer.list') }}"><i class="ion ion-ios-person-outline"></i><span>Customers</span></a>
                        </li>
                        <li class="{{ in_array($uri, array('contact.create','contact.edit'))?'active':'' }}">
                            <a href="{{ route('contact.edit', 1) }}"><i class="ion ion-ios-contact-outline"></i><span>Contact Info</span></a>
                        </li>
                        <li class="{{ in_array($uri, array('about.create','about.edit'))?'active':'' }}">
                            <a href="{{ route('about.edit', 1) }}"><i class="ion ion-clipboard"></i><span>About</span></a>
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
                        <li class="menu-header">Components</li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Components</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="general.html"><i class="ion ion-ios-circle-outline"></i> Basic</a></li>
                                <li><a href="components.html"><i class="ion ion-ios-circle-outline"></i> Main Components</a></li>
                                <li><a href="buttons.html"><i class="ion ion-ios-circle-outline"></i> Buttons</a></li>
                                <li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> Toastr</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a></li>
                                <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                                <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="table.html"><i class="ion ion-clipboard"></i><span>Tables</span></a>
                        </li>
                        <li>
                            <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
                        </li>
                        <li>
                            <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                                <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                                <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
                                <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
                                <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
                            </ul>
                        </li>

                        <li class="menu-header">More</li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
                            <ul class="menu-dropdown">
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                                <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                        <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
                                            <ul class="menu-dropdown">
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a>
                        </li>
                        <li>
                            <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
                        </li>          </ul>
                    <div class="p-3 mt-4 mb-4">
                        <a href="http://stisla.multinity.com/" class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
                            <i class="ion ion-help-buoy"></i> <div>Go PRO!</div>
                        </a>
                    </div>
                </aside>
            </div>
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://multinity.com/">Multinity</a>
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

    <script src="{{asset('dist/modules/summernote/summernote-lite.js')}}"></script>

    <script src="{{asset('dist/js/scripts.js')}}"></script>
    <script src="{{asset('dist/js/custom.js')}}"></script>
    <script src="{{asset('dist/js/demo.js')}}"></script>

    <!-- Location picker -->
    <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
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
                    resultKhans.length > 0?$('#khan_id').prop('disabled', false):$('#khan_id').prop('disabled', true);
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
                    resultSangkats.length > 0 ? $('#sangkat_id').prop('disabled', false) : $('#sangkat_id').prop('disabled', true);
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
                    resultVillages.length > 0 ? $('#village_id').prop('disabled', false) : $('#village_id').prop('disabled', true);
                    for (i in resultVillages) {
                        $('#village_id').append('<option value="'+ resultVillages[i].id +'">'+ resultVillages[i].name +'</option>');
                    }
                });
            });
        });
    </script>

</body>
</html>