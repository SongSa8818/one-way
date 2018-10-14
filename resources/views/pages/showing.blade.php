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

            <!-- Listings -->
            <div class="col-lg-4 sidebar_col">
                <h5>Advertise banner</h5>
            </div>
            <div class="col-lg-8 listings_col">

                <!-- Listings Item -->
                @foreach($showings as $property)
                <div class="listing_item">
                    <div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
                        <div class="listing_image_container">
                            <div class="listing_image">
                                <!-- ImageProperty by: https://unsplash.com/@breather -->
                                <div class="listing_background" style="background-image:url({{ url('/uploads/'.$property->img) }})"></div>
                            </div>
                        </div>
                        <div class="listing_content">
                            <div class="listing_title"><a href="{{ route('property.show', $property->id) }}">{{ $property->title }}</a></div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span class="room_title">Blocked by</span>
                                    <div class="room_content">
                                        <div class="room_image">
                                            <a href="#">
                                                <img src="{{ url('/uploads/profiles/'.$property->picture) }}" class="img-agent-booked rounded-circle" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <span class="room_title">Blocked date</span>
                                    <div class="room_content">
                                        <span class="room_tag"><a href="#">{{ $property->updated_at }}</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="room_tags">
                                <div class="button elements_button_1"><a href="#">Unblock now</a></div>
                                <div class="button elements_button_2"><a href="#">Visitor</a></div>
                            </div>

                            <div class="featured_card_box d-flex flex-row align-items-center trans_300">
                                <img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                <div class="featured_card_box_content">
                                    <div class="featured_card_price_title trans_300">{{ $property->type }}</div>
                                    <div class="featured_card_price trans_300">${{ $property->price }}</div>
                                </div>
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