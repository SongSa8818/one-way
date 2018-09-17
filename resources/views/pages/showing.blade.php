@extends('master')
@section('title','Showing property')

@section('content')

<!-- Listings -->

<div class="listings">
    <div class="container">

        <div class="row mb-5">
            <div class="col">
                <div class="section_title text-center">
                    <h3>SHOWING PROPERTIES</h3>
                    <span class="section_subtitle">Properties are booking</span>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Search Sidebar -->

            <div class="col-lg-4 sidebar_col">
                <!-- Search Box -->

                <div class="search_box">

                    <div class="search_box_content">

                        <!-- Search Box Title -->
                        <div class="search_box_title text-center">
                            <div class="search_box_title_inner">
                                <div class="search_box_title_icon d-flex flex-column align-items-center justify-content-center"><img src="images/search.png" alt=""></div>
                                <span>search your home</span>
                            </div>
                        </div>

                        <!-- Search Form -->
                        <form class="search_form" action="#">
                            <div class="search_box_container">
                                <ul class="dropdown_row clearfix">
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Keywords</div>
                                        <select name="keywords" id="keywords" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>Keyword 1</option>
                                            <option>Keyword 2</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Property ID</div>
                                        <select name="property_ID" id="property_ID" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>ID 1</option>
                                            <option>ID 2</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Property Status</div>
                                        <select name="property_status" id="property_status" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>Status 1</option>
                                            <option>Status 2</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Location</div>
                                        <select name="property_location" id="property_location" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>Location 1</option>
                                            <option>Location 2</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Property Type</div>
                                        <select name="property_type" id="property_type" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>Type 1</option>
                                            <option>Type 2</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item dropdown_item_half">
                                        <div class="dropdown_item_title">Bedrooms no</div>
                                        <select name="bedrooms_no" id="bedrooms_no" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item dropdown_item_half">
                                        <div class="dropdown_item_title">Bathrooms no</div>
                                        <select name="bathrooms_no" id="bathrooms_no" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item dropdown_item_half">
                                        <div class="dropdown_item_title">Min Price</div>
                                        <select name="min_price" id="min_price" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>$10000</option>
                                            <option>$20000</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item dropdown_item_half">
                                        <div class="dropdown_item_title">Max Price</div>
                                        <select name="max_price" id="max_price" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>$1000000</option>
                                            <option>$2000000</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item dropdown_item_half">
                                        <div class="dropdown_item_title">Min Sq Ft</div>
                                        <select name="min_sq_ft" id="min_sq_ft" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>Any</option>
                                            <option>Any</option>
                                        </select>
                                    </li>
                                    <li class="dropdown_item dropdown_item_half">
                                        <div class="dropdown_item_title">Max Sq Ft</div>
                                        <select name="max_sq_ft" id="max_sq_ft" class="dropdown_item_select">
                                            <option>Any</option>
                                            <option>Any</option>
                                            <option>Any</option>
                                        </select>
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

                                <div class="search_button">
                                    <input value="search" type="submit" class="search_submit_button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Listings -->

            <div class="col-lg-8 listings_col">

                <!-- Listings Item -->
                @for($i = 0; $i < 10; $i++)
                <div class="listing_item">
                    <div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
                        <div class="listing_image_container">
                            <div class="listing_image">
                                <!-- ImageProperty by: https://unsplash.com/@breather -->
                                <div class="listing_background" style="background-image:url(images/listing_1.jpg)"></div>
                            </div>
                        </div>
                        <div class="listing_content">
                            <div class="listing_title"><a href="{{ route('property.index') }}">House in West California</a></div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span class="room_title">Blocked by</span>
                                    <div class="room_content">
                                        <div class="room_image"><a href="#"><img src="images/agent_4.jpg" class="img-agent-booked rounded-circle" alt=""></a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <span class="room_title">Blocked date</span>
                                    <div class="room_content"><span class="room_tag"><a href="#">{{ \Carbon\Carbon::parse(date(now()))->format('d-M-Y') }}</a></span></div>
                                </div>
                            </div>
                            <div class="room_tags">
                                <div class="button elements_button_1"><a href="#">Unblock now</a></div>
                                <div class="button elements_button_2"><a href="#">Visitor</a></div>
                            </div>

                            <div class="featured_card_box d-flex flex-row align-items-center trans_300">
                                <img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                <div class="featured_card_box_content">
                                    <div class="featured_card_price_title trans_300">For Sale</div>
                                    <div class="featured_card_price trans_300">$540,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor

            </div>

        </div>

        <div class="row">
            <div class="col clearfix">
                <div class="listings_nav">
                    <ul>
                        <li class="listings_nav_item active"><a href="#">01.</a></li>
                        <li class="listings_nav_item"><a href="#">02.</a></li>
                        <li class="listings_nav_item"><a href="#">03.</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

@endsection