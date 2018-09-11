
<!-- Home -->
<div class="home">
    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            <!-- Home Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="owl-item home_slider_item">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="carousel slideshow" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target= src="{{ url('/uploads/slideshows/'.@$slideshow->image) }}" data-slideshow-to="0" class="active"></li>
                                <li data-target= src="{{ url('/uploads/slideshows/'.@$slideshow->image) }}" data-slideshow-to="1"></li>
                                <li data-target= src="{{ url('/uploads/slideshows/'.@$slideshow->image) }}" data-slideshow-to="2"></li>
                                <li data-target= src="{{ url('/uploads/slideshows/'.@$slideshow->image) }}" data-slideshow-to="3"></li>
                                <li data-target= src="{{ url('/uploads/slideshows/'.@$slideshow->image) }}" data-slideshow-to="4"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                @foreach ($slideshows as $key => $slideshow)
                                    <div class="item{{ $key == 0 ? ' active' : '' }}">
                                        <img src="{{ $slideshow->image }}">
                                    </div>
                                @endforeach
                            <!-- Carouse Images -->
                                <!-- Carousel Controls -->
                                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                                <!-- End Carousel Controls -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>