@extends('master')
@section('title','Home')

@section('content')

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
                                    <span>Find properties</span>
                                </div>
                            </div>

                            <!-- Search Arrow
                            <div class="search_arrow_box">
                                <div class="search_arrow_box_inner">
                                    <div class="search_arrow_circle d-flex flex-column align-items-center justify-content-center"><span>Search it here</span></div>
                                    <img src="images/search_arrow.png" alt="">
                                </div>
                            </div>-->

                            <!-- Search Form -->
                            {{ Form::model("", array('route' => array('search'), 'class' => 'search_form', 'method' => 'get')) }}
                                <div class="search_box_container">
                                    <ul class="row clearfix">
                                        <li class="col-4">
                                            <div class="dropdown_item_title">Property title</div>
                                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Property title">
                                        </li>
                                        <li class="col-2">
                                            <div class="dropdown_item_title">Property Type</div>
                                            <select name="type" id="type" class="form-control" value="{{ old('type') }}">
                                                <option value="">Any</option>
                                                @foreach($types as $value)
                                                    <option value="{{$value}}" {{ $value == @$property->type? 'selected': '' }}>{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </li>
                                        <li class="col-2">
                                            <div class="dropdown_item_title">Status</div>
                                            <select name="status" id="status" class="form-control">
                                                <option value="">Any</option>
                                                @foreach($status as $value)
                                                    <option value="{{$value}}" {{ $value == @$property->status? 'selected': '' }}>{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </li>
                                        <li class="col-2">
                                            <div class="dropdown_item_title">Location</div>
                                            <select name="location" id="location" class="form-control">
                                                <option value="">Any</option>
                                                @foreach($cities as $key => $value)
                                                    <option value="{{$key}}" {{ $key == @$property->city_id? 'selected': '' }}>{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </li>
                                        <li class="col-2">
                                            <div class="search_button">
                                                <input value="search" type="submit" class="btn-search btn btn-primary">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            {{ Form::close() }}
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
                        <h3>LATEST PROPERTIES</h3>
                        <span class="section_subtitle">See our best offers</span>
                    </div>
                </div>
            </div>

            <div class="row featured_row">
                @foreach($latestProperties as $property)
                <div class="col-lg-4 featured_card_col">
                    <div class="featured_card_container trans_200">
                        <div class="card featured_card">
                            <div class="featured_panel">{{ $property->status }}</div>
                            <img class="card-img-top" src="{{ url('/uploads/'.$image->img) }}" alt="{{ $property->title }}">
                            <div class="card-body">
                                <div class="card-title"><a href="{{ route('property.show', $property->id) }}">{{ $property->title }}</a></div>
                            </div>
                        </div>
                        <div class="featured_card_box d-flex flex-row align-items-center">
                            <img src="images/tag.svg" alt="https://www.flaticon.com/authors/lucy-g">
                            <div class="featured_card_box_content">
                                <div class="featured_card_price_title">{{ $property->type }}</div>
                                <div class="featured_card_price">${{ $property->price }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Buttons -->
            <div class="elements_section buttons_section">
                <div class="buttons_section_content">
                    <div class="button elements_button_1"><a href="#">View more</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <div class="testimonials">
        <div class="testimonials_background_container prlx_parent">
            <div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h3>Our agency</h3>
                        <span class="section_subtitle">See our best agencies</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonials_slider_container">
                        <!-- Testimonials Slider -->
                        <div class="owl-carousel owl-theme testimonials_slider">
                        @foreach($agencies as $agency)
                            <!-- Testimonials Item -->
                            <div class="owl-item">
                                <div class="testimonials_item text-center">
                                    <p class="testimonials_text">{{ $agency->address }}</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="{{ url('/uploads/profiles/'.$agency->picture) }}" alt="{{ $agency->full_name }}">
                                        </div>
                                        <div class="testimonial_name">{{ $agency->full_name }}</div>
                                        <div class="testimonial_title">{{ $agency->phone_number }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Workflow -->

    <div class="workflow">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h3>see how we operate</h3>
                        <span class="section_subtitle">What you need to do</span>
                    </div>
                </div>
            </div>

            <div class="row workflow_row">
                <div class="workflow_rocket"><img src="images/rocket.png" alt=""></div>

                <!-- Workflow Item -->
                <div class="col-lg-4 workflow_col">
                    <div class="workflow_item">
                        <div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
                            <div class="workflow_image_background">
                                <div class="workflow_circle_outer trans_200"></div>
                                <div class="workflow_circle_inner trans_200"></div>
                                <div class="workflow_num text-center trans_200"><span>01.</span></div>
                            </div>
                            <div class="workflow_image">
                                <img src="images/workflow_1.png" alt="">
                            </div>

                        </div>
                        <div class="workflow_item_content text-center">
                            <div class="workflow_title">Choose a Location</div>
                            <p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
                        </div>
                    </div>
                </div>

                <!-- Workflow Item -->
                <div class="col-lg-4 workflow_col">
                    <div class="workflow_item">
                        <div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
                            <div class="workflow_image_background">
                                <div class="workflow_circle_outer trans_200"></div>
                                <div class="workflow_circle_inner trans_200"></div>
                                <div class="workflow_num text-center trans_200"><span>02.</span></div>
                            </div>
                            <div class="workflow_image">
                                <img src="images/workflow_2.png" alt="">
                            </div>

                        </div>
                        <div class="workflow_item_content text-center">
                            <div class="workflow_title">Find the Perfect Home</div>
                            <p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
                        </div>
                    </div>
                </div>

                <!-- Workflow Item -->
                <div class="col-lg-4 workflow_col">
                    <div class="workflow_item">
                        <div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
                            <div class="workflow_image_background">
                                <div class="workflow_circle_outer trans_200"></div>
                                <div class="workflow_circle_inner trans_200"></div>
                                <div class="workflow_num text-center trans_200"><span>03.</span></div>
                            </div>
                            <div class="workflow_image">
                                <img src="images/workflow_3.png" alt="">
                            </div>

                        </div>
                        <div class="workflow_item_content text-center">
                            <div class="workflow_title">Move in your new life</div>
                            <p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Cities -->

    <div class="cities">
        <div class="cities_background"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h3>Our Customer Requests</h3>
                        <span class="section_subtitle">What you need to request?</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <!-- Cities Slider -->

                    <div class="cities_slider_container">
                        <div class="owl-carousel owl-theme cities_slider">
                        @foreach($request_infos as $request_info)
                            <!-- City Item -->
                            <div class="owl-item city_item">
                                <a href="#">
                                    <div class="city_image">
                                        <img src="{{ url('/uploads/requests/'.@$request_info->image) }}" alt="">
                                    </div>
                                    <div class="city_details"><img src="images/search.png" alt=""></div>
                                    <div class="city_name"><span>miami</span></div>
                                </a>
                            </div>
                        @endforeach
                        </div>
                        <div class="cities_prev cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
                            <img src="images/nav_left.png" alt="">
                        </div>

                        <div class="cities_next cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
                            <img src="images/nav_right.png" alt="">
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection