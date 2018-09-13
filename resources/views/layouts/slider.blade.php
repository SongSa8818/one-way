<!-- Home -->
<div class="home">
    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
        @foreach($slideshows as $slideshow)
            <!-- Home Slider Item -->
            <div class="home_slider_background">
                <!-- ImageProperty by https://unsplash.com/@aahubs -->
                <div class="sidebar-user-picture">
                    <img src="{{ url('/uploads/slideshows/'.@$slideshow->image) }}"/>
                </div>
            </div>
         @endforeach
        </div>

        <!-- Home Slider Nav -->
        <div class="home_slider_nav_left home_slider_nav d-flex flex-row align-items-center justify-content-end">
            <img src="images/nav_left.png" alt="">
        </div>

    </div>
</div>