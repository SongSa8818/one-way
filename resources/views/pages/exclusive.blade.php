@extends('master')
@section('title','Exclusive')

@section('content')

<!-- Listings -->

<div class="listings">
    <div class="container">
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
                @foreach($properties as $property)
                    <div class="listing_item">
                        <div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
                            <div class="listing_image_container">
                                <div class="listing_image">
                                    <!-- Image by: https://unsplash.com/@breather -->
                                    <div class="listing_background" style="background-image:url(images/listing_1.jpg)"></div>
                                </div>
                                <div class="featured_card_box d-flex flex-row align-items-center trans_300">
                                    <img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    <div class="featured_card_box_content">
                                        <div class="featured_card_price_title trans_300">For Sale</div>
                                        <div class="featured_card_price trans_300">${{ $property->price }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing_content">
                                <div class="listing_title"><a href="{{ route('property.index') }}">{{ $property->title }}</a></div>
                                <div class="listing_text">{{ $property->description }}</div>
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

                                <div class="room_tags">
                                    <span class="room_tag"><a href="#">Hottub</a></span>
                                    <span class="room_tag"><a href="#">Swimming Pool</a></span>
                                    <span class="room_tag"><a href="#">Garden</a></span>
                                    <span class="room_tag"><a href="#">Patio</a></span>
                                    <span class="room_tag"><a href="#">Hard Wood Floor</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="row">
            <div class="col clearfix">
                <div class="listings_nav">
                    {{ $properties->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

@endsection