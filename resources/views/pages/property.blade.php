@extends('master')
@section('title','Property')

@section('content')


    <!-- Listing -->

    <div class="listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Listing Title -->
                    <div class="listing_title_container">
                        <div class="listing_title">House in west California</div>
                        <p class="listing_text">Donec ullamcorper nulla non metus auctor fringi lla.Curabitur blandit tempus porttitor.</p>
                        <div class="room_tags">
                            <span class="room_tag"><a href="#">Hottub</a></span>
                            <span class="room_tag"><a href="#">Swimming Pool</a></span>
                            <span class="room_tag"><a href="#">Garden</a></span>
                            <span class="room_tag"><a href="#">Patio</a></span>
                            <span class="room_tag"><a href="#">Hard Wood Floor</a></span>
                        </div>
                    </div>
                </div>

                <!-- Listing Price -->
                <div class="col-lg-4 listing_price_col clearfix">
                    <div class="featured_card_box d-flex flex-row align-items-center trans_300 float-lg-right">
                        <img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
                        <div class="featured_card_box_content">
                            <div class="featured_card_price_title trans_300">For Sale</div>
                            <div class="featured_card_price trans_300">$540,000</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">

                    <!-- Listing ImageProperty Slider -->

                    <div class="listing_slider_container">
                        <div class="owl-carousel owl-theme listing_slider">

                            <!-- Listing Slider Item -->
                            <div class="owl-item listing_slider_item">
                                <img src="images/listing_slider_1.jpg" alt="https://unsplash.com/@astute">
                            </div>

                            <!-- Listing Slider Item -->
                            <div class="owl-item listing_slider_item">
                                <img src="images/listing_slider_1.jpg" alt="https://unsplash.com/@astute">
                            </div>

                            <!-- Listing Slider Item -->
                            <div class="owl-item listing_slider_item">
                                <img src="images/listing_slider_1.jpg" alt="https://unsplash.com/@astute">
                            </div>

                            <!-- Listing Slider Item -->
                            <div class="owl-item listing_slider_item">
                                <img src="images/listing_slider_1.jpg" alt="https://unsplash.com/@astute">
                            </div>

                            <!-- Listing Slider Item -->
                            <div class="owl-item listing_slider_item">
                                <img src="images/listing_slider_1.jpg" alt="https://unsplash.com/@astute">
                            </div>

                        </div>

                        <div class="listing_slider_nav listing_slider_prev d-flex flex-row align-items-center justify-content-center trans_200">
                            <img src="images/nav_left.png" alt="">
                        </div>

                        <div class="listing_slider_nav listing_slider_next d-flex flex-row align-items-center justify-content-center trans_200">
                            <img src="images/nav_right.png" alt="">
                        </div>

                    </div>

                </div>
            </div>


            <div class="row listing_content_row">

                <!-- Search Sidebar -->

                <div class="col-lg-4 sidebar_col">
                    <!-- Search Box -->

                    <div class="search_box">

                        <div class="search_box_content">

                            <!-- Search Box Title -->
                            <div class="search_box_title text-center">
                                <div class="search_box_title_inner">
                                    <div class="search_box_title_icon d-flex flex-column align-items-center justify-content-center">
                                        <img src="images/search.png" alt=""></div>
                                    <span>Menu side bar</span>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="hello">
                        <div class="footer_col_title">Message to seller</div>
                        <div class="footer_contact_form_container">
                            <form id="hello_contact_form" class="footer_contact_form" action="post">
                                <input id="hello_contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                                <input id="hello_contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                                <textarea id="hello_contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                                <button id="hello_contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">send</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Listing -->

                <div class="col-lg-8 listing_col">

                    <div class="listing_details">
                        <div class="listing_subtitle">Extra Facilities</div>
                        <p class="listing_details_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
                        <div class="rooms">

                            <div class="room">
                                <span class="room_title">Bedrooms</span>
                                <div class="room_content">
                                    <div class="room_image"><img src="images/bedroom.png" alt=""></div>
                                    <span class="room_number">4</span>
                                </div>
                            </div>

                            <div class="room">
                                <span class="room_title">Bathrooms</span>
                                <div class="room_content">
                                    <div class="room_image"><img src="images/shower.png" alt=""></div>
                                    <span class="room_number">3</span>
                                </div>
                            </div>

                            <div class="room">
                                <span class="room_title">Area</span>
                                <div class="room_content">
                                    <div class="room_image"><img src="images/area.png" alt=""></div>
                                    <span class="room_number">7100 Sq Ft</span>
                                </div>
                            </div>

                            <div class="room">
                                <span class="room_title">Patio</span>
                                <div class="room_content">
                                    <div class="room_image"><img src="images/patio.png" alt=""></div>
                                    <span class="room_number">1</span>
                                </div>
                            </div>

                            <div class="room">
                                <span class="room_title">Garage</span>
                                <div class="room_content">
                                    <div class="room_image"><img src="images/garage.png" alt=""></div>
                                    <span class="room_number">2</span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Listing Description -->
                    <div class="listing_description">
                        <div class="listing_subtitle">Description</div>
                        <p class="listing_description_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue. Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit elit leo ac diam. Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue. Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit elit leo ac diam</p>
                    </div>

                    <!-- Listing Additional Details -->
                    <div class="listing_additional_details">
                        <div class="listing_subtitle">Additional Details</div>
                        <ul class="additional_details_list">
                            <li class="additional_detail"><span>bedroom features:</span> Main Floor Master Bedroom, Walk-In Closet</li>
                            <li class="additional_detail"><span>dining area:</span> Breakfast Counter/Bar, Living/Dining Combo</li>
                            <li class="additional_detail"><span>doors & windows:</span> Bay Window</li>
                            <li class="additional_detail"><span>entry location:</span> Mid Level</li>
                            <li class="additional_detail"><span>floors:</span> Raised Foundation, Vinyl Tile, Wall-to-Wall Carpet, Wood</li>
                        </ul>
                    </div>

                    <!-- Listing Video -->
                    <div class="listing_video">
                        <div class="listing_subtitle">Property Video</div>
                        <div class="listing_video_link">
                            <a class="video" href="https://vimeo.com/99340873" title=""><img src="images/listing_video.jpg" alt="https://www.pexels.com/u/binyaminmellish/"></a>
                            <div class="video_play"><img src="images/play.svg" alt=""></div>
                        </div>
                    </div>

                    <!-- Listing Map -->
                    <div class="listing_map">
                        <div class="listing_subtitle">Property on map</div>
                        <div id="google_map">
                            <div class="map_container">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection