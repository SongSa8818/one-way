@extends('master')
@section('title','Property')

@section('content')
    <title>The Estate</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The Estate Teplate">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- Search Box -->
    <div class="search_box">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="search_box_outer">
                        <div class="search_box_inner">

                            <!-- Search Box Title -->
                            <div class="search_box_title text-center">
                                <div class="search_box_title_inner">
                                    <div class="search_box_title_icon d-flex flex-column align-items-center justify-content-center"><img src="images/search.png" alt=""></div>
                                    <span>Find your properties</span>
                                </div>
                            </div>


                            <!-- Search Form -->
                            <form class="search_form" action="#">
                                <div class="search_box_container">
                                    <ul class="dropdown_row clearfix">
                                        <li class="dropdown_item dropdown_item_5">
                                            <div class="dropdown_item_title">Keywords</div>
                                            <select name="keywords" id="keywords" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>Keyword 1</option>
                                                <option>Keyword 2</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item dropdown_item_5">
                                            <div class="dropdown_item_title">Property ID</div>
                                            <select name="property_ID" id="property_ID" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>ID 1</option>
                                                <option>ID 2</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item dropdown_item_5">
                                            <div class="dropdown_item_title">Property Status</div>
                                            <select name="property_status" id="property_status" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>Status 1</option>
                                                <option>Status 2</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item dropdown_item_5">
                                            <div class="dropdown_item_title">Location</div>
                                            <select name="property_location" id="property_location" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>Location 1</option>
                                                <option>Location 2</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item dropdown_item_5">
                                            <div class="dropdown_item_title">Property Type</div>
                                            <select name="property_type" id="property_type" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>Type 1</option>
                                                <option>Type 2</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>

                                <div class="search_box_container">
                                    <ul class="dropdown_row clearfix">
                                        <li class="dropdown_item dropdown_item_6">
                                            <div class="dropdown_item_title">Bedrooms no</div>
                                            <select name="bedrooms_no" id="bedrooms_no" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item dropdown_item_6">
                                            <div class="dropdown_item_title">Bathrooms no</div>
                                            <select name="bathrooms_no" id="bathrooms_no" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item dropdown_item_6">
                                            <div class="dropdown_item_title">Min Price</div>
                                            <select name="min_price" id="min_price" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>$10000</option>
                                                <option>$20000</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item dropdown_item_6">
                                            <div class="dropdown_item_title">Max Price</div>
                                            <select name="max_price" id="max_price" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>$1000000</option>
                                                <option>$2000000</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item dropdown_item_6">
                                            <div class="dropdown_item_title">Min Sq Ft</div>
                                            <select name="min_sq_ft" id="min_sq_ft" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>Any</option>
                                                <option>Any</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item dropdown_item_6">
                                            <div class="dropdown_item_title">Max Sq Ft</div>
                                            <select name="max_sq_ft" id="max_sq_ft" class="dropdown_item_select">
                                                <option>Any</option>
                                                <option>Any</option>
                                                <option>Any</option>
                                            </select>
                                        </li>
                                        <li class="dropdown_item">
                                            <div class="search_button">
                                                <input value="search" type="submit" class="search_submit_button">
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="search_features_container">
                                    <div class="search_features_trigger">
                                        <a href="#">Specific features</a>
                                    </div>
                                    <ul class="search_features clearfix">
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_1" class="search_features_cb">
                                                <label for="search_features_1">Feature 1</label>
                                            </div>
                                        </li>
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_2" class="search_features_cb">
                                                <label for="search_features_2">Feature 2</label>
                                            </div>
                                        </li>
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_3" class="search_features_cb">
                                                <label for="search_features_3">Feature 3</label>
                                            </div>
                                        </li>
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_4" class="search_features_cb">
                                                <label for="search_features_4">Feature 4</label>
                                            </div>
                                        </li>
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_5" class="search_features_cb">
                                                <label for="search_features_5">Feature 5</label>
                                            </div>
                                        </li>
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_6" class="search_features_cb">
                                                <label for="search_features_6">Feature 6</label>
                                            </div>
                                        </li>
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_7" class="search_features_cb">
                                                <label for="search_features_7">Feature 7</label>
                                            </div>
                                        </li>
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_8" class="search_features_cb">
                                                <label for="search_features_8">Feature 8</label>
                                            </div>
                                        </li>
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_9" class="search_features_cb">
                                                <label for="search_features_9">Feature 9</label>
                                            </div>
                                        </li>
                                        <li class="search_features_item">
                                            <div>
                                                <input type="checkbox" id="search_features_10" class="search_features_cb">
                                                <label for="search_features_10">Feature 10</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Featured Properties -->

    <div class="featured">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h3>All PROPERTIES</h3>
                        <span class="section_subtitle">See our best offers</span>
                    </div>
                </div>
            </div>

            <div class="row featured_row">
                @for($i = 0; $i < 12; $i++)
                    <div class="col-lg-4 featured_card_col">
                        <div class="featured_card_container trans_200">
                            <div class="card featured_card">
                                <div class="featured_panel">For sale</div>
                                <img class="card-img-top" src="images/featured_1.jpg" alt="https://unsplash.com/@breather">
                                <div class="card-body">
                                    <div class="card-title"><a href="listings_single.html">House in West California</a></div>
                                    <div class="listing_content">
                                        <div class="listing_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
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

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="featured_card_box d-flex flex-row align-items-center">
                                <img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                <div class="featured_card_box_content">
                                    <div class="featured_card_price_title">For Sale</div>
                                    <div class="featured_card_price">$540,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <!-- Buttons -->
            <div class="elements_section buttons_section">
                <div class="buttons_section_content">
                    <div class="button elements_button_1"><a href="#">View more</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->

    <div class="cta_1">
        <div class="cta_1_background" style="background-image:url(images/cta_1.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="cta_1_content d-flex flex-lg-row flex-column align-items-center justify-content-start">
                        <h3 class="cta_1_text text-lg-left text-center">Do you want to talk with one of our <span>real estate experts?</span></h3>
                        <div class="cta_1_phone">Call now:   +885 23 999 888</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection