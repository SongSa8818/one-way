

<div class="container">
    <div class="row">
        <div class="col">
            <div class="header_container d-flex flex-row align-items-center trans_300">

                <!-- Logo -->

                <div class="logo_container">
                    <a href="{{ route("home") }}">
                        <div class="logo">
                            <img src="{{ asset('/images/logo.png') }}" alt="">
                            <span>One Way Realty</span>
                        </div>
                    </a>
                </div>

                <!-- Main Navigation -->
                <nav class="main_nav">
                    <ul class="main_nav_list">
                        @foreach ($menus as $key => $value)
                            <li class="main_nav_item {{ ($isCustomer == true && in_array($key, ['showing.index','offer.index','request.index']))? 'hidden' : '' }} {{ $key == $uri ? 'main_nav_item_active' : '' }}">
                                <a href="{{ route($key) }}">{{$value}}</a></li>
                        @endforeach
                        @if(!Auth::check())
                            <li class="main_nav_item"><a href="{{ route("login") }}">Login</a></li>
                        @endif
                    </ul>
                </nav>


                <!-- Phone Home -->
                @if(Auth::check())
                <nav class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->full_name }}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </nav>
                @endif

                <!-- Hamburger -->

                <div class="hamburger_container menu_mm">
                    <div class="hamburger menu_mm">
                        <i class="fas fa-bars trans_200 menu_mm"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Menu -->

<div class="menu menu_mm">
    <ul class="menu_list">
        @foreach ($menus as $key => $value)
            <li class="menu_item {{ $key == $uri ? 'menu_item_active' : '' }}">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route($key) }}">{{ $value }}</a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        @if(!Auth::check())
            <li class="menu_item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route("login") }}">Login</a>
                        </div>
                    </div>
                </div>
            </li>
        @else
            <li class="menu_item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        @endif
    </ul>
</div>
