@extends('master')
@section('title','Property')

@section('content')

<div class="listing">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">

                <!-- Listing Title -->
                <div class="listing_title_container">
                    <div class="listing_title">{{ $property->title }}</div>
                </div>
            </div>

            <!-- Listing Price -->
            <div class="col-lg-3">
                <div class="featured_card_box d-flex flex-row align-items-center trans_300 float-lg-right">
                    <img src="../images/tag.svg" alt="">
                    <div class="featured_card_box_content">
                        <div class="featured_card_price_title trans_300">{{ $property->type }}</div>
                        <div class="featured_card_price trans_300">${{ $property->price }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Listing ImageProperty Slider -->

                <div class="listing_slider_container">
                    <div class="owl-carousel owl-theme listing_slider">
                        @foreach($images as $image)
                            <div class="owl-item listing_slider_item">
                                <img src="{{ url('/uploads/'.$image->img) }}" alt="https://unsplash.com/@astute">
                            </div>
                        @endforeach
                    </div>

                    <div class="listing_slider_nav listing_slider_prev d-flex flex-row align-items-center justify-content-center trans_200">
                        <img src="../images/nav_left.png" alt="">
                    </div>

                    <div class="listing_slider_nav listing_slider_next d-flex flex-row align-items-center justify-content-center trans_200">
                        <img src="../images/nav_right.png" alt="">
                    </div>

                </div>

            </div>
        </div>


        <div class="row listing_content_row">

            <!-- Search Sidebar -->

            <div class="col-lg-3 sidebar_col">
                <!-- Search Box -->
                <div class="search_box">
                    <div class="search_box_content">
                        <!-- Buttons -->
                        <div class="elements_section buttons_section">
                            <h4>Status : {{ $property->status }}</h4>
                            <a href="#" class="btn btn-info btn-lg w-120" data-toggle="modal" data-target="#exampleModalCenter">Show</a>
                            <a href="#" class="btn btn-primary btn-lg w-120">Offer</a>
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        {{ Form::model(@$property, array('route' => array('property.block', @$property->id), 'class' => '', 'method' => 'put')) }}
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3>Are you sure to block this property?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary w-120 h-40" data-dismiss="modal">No</button>
                            <button type="submit" type="button" class="btn btn-primary w-120 h-40">Yes</button>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

            <!-- Listing -->

            <div class="col-lg-9 listing_col">

                <!-- Listing Description -->
                <div class="listing_description">
                    <div class="listing_subtitle">Description</div>
                    <p class="listing_description_text">{{ $property->description }}</p>
                </div>

                <!-- Listing Additional Details -->
                <div class="listing_additional_details">
                    <div class="listing_subtitle">Property Details</div>
                    <ul class="additional_details_list">
                        <li class="additional_detail"><span>Property ID:</span> {{ $property->property_number }}</li>
                        <li class="additional_detail"><span>Property type:</span> {{ $property->type }}</li>
                        <li class="additional_detail"><span>Property Location:</span> {{ $property->city_name.', '.$property->khan_name.', '.$property->sangkat_name.', '.$property->village_name }}</li>
                    </ul>
                </div>

                <!-- Listing Video -->
                <div class="listing_video">
                    <div class="listing_subtitle">Property Video</div>
                    <div class="listing_video_link">
                        <a class="video" href="https://www.youtube.com/watch?v={{ $property->video_url }}" title="">
                            <img src="https://img.youtube.com/vi/{{ $property->video_url }}/0.jpg" alt=""></a>
                        <div class="video_play"><img src="../images/play.svg" alt=""></div>
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