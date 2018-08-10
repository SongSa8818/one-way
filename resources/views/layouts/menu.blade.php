
<header class="header trans_300">
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

                    <div class="phone_home text-center">
                        <span>+0080 234 567 84441</span>
                    </div>

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
            <li class="menu_item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="#">home</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu_item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="about.html">about us</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu_item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="listings.html">listings</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu_item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="news.html">news</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu_item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="contact.html">contact</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</header>
