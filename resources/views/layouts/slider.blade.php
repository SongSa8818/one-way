<!-- Home -->
<div class="home">
    <!-- Home Slider -->
    <div class="home_slider_container">

        @foreach($slideshows as $slideshow)
            <div class="owl-carousel owl-theme home_slider">
                <!-- Home Slider Item -->
                <div class="home_slider_background">
                    <div class="home_slider_background" style="background-image:url({{ url('/uploads/slideshows/'.@$slideshow->image) }})"></div>
                    <div class="home_slider_content_container text-center">
                        <div class="home_slider_content">
                            <h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">find your home</h1>
                        </div>
                    </div>
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