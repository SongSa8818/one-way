

<div class="container">
    <div class="row">
        <div class="col">
            <div class="header_container d-flex flex-row align-items-center trans_300">

                <!-- Logo -->

                <div class="logo_container">
                    <a href="#">
                        <div class="logo">
                            <img src="images/logo.png" alt="">
                            <span>the estate</span>
                        </div>
                    </a>
                </div>

                <!-- Main Navigation -->

                <nav class="main_nav">
                    <ul class="main_nav_list">
                        @foreach ($menu as $m)
                            <li class="main_nav_item"><a href="#">{{$m}}</a></li>
                        @endforeach
                    </ul>
                </nav>


                <!-- Phone Home -->
                @if(!Auth::check())
                <div class="phone_home text-center">
                    <span>Call now : 023 999 888</span>
                </div>
                @else
                <nav class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
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
        @foreach ($menu as $m)
            <li class="menu_item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="#">{{ $m }}</a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
