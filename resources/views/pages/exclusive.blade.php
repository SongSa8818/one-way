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
                        {{ Form::model("", array('route' => array('search'), 'class' => 'search_form', 'method' => 'get')) }}
                            <div class="search_box_container">
                                <ul class="dropdown_row clearfix">
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Property title</div>
                                        <input type="text" name="title" class="form-control" value="{{ @$_GET['title'] }}" placeholder="Title">
                                    </li>
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Property ID</div>
                                        <input type="text" name="property_number" class="form-control" value="{{ @$_GET['property_number'] }}" placeholder="ID">
                                    </li>
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Property type</div>
                                        <select name="type" id="type" class="form-control">
                                            <option value="">Any</option>
                                            @foreach($types as $value)
                                                <option value="{{$value}}" {{ $value == @$_GET['type'] ? 'selected': '' }}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Status</div>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Any</option>
                                            @foreach($status as $value)
                                                <option value="{{$value}}" {{ $value == @$_GET['status'] ? 'selected': '' }}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li class="dropdown_item">
                                        <div class="dropdown_item_title">Location</div>
                                        <select name="location" id="location" class="form-control">
                                            <option value="">Any</option>
                                            @foreach($cities as $key => $value)
                                                <option value="{{$key}}" {{ $key == @$_GET['location'] ? 'selected': '' }}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li class="dropdown_item dropdown_item_1">
                                        <button type="submit" class="btn-search btn btn-primary"><span class="fa fa-search"></span></button>
                                    </li>
                                </ul>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

            <!-- Listings -->

            <div class="col-lg-8 listings_col">
                <?php $data = @$results != null ? $results : $properties; ?>
                <!-- Listings Item -->
                @foreach($data as $property)
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
                                <div class="listing_text">{{ substr($property->description, 0, 45) }}...</div>
                                <div class="room_tags">
                                    {{--<div class="button elements_button_1"><a href="#">Block now</a></div>--}}
                                    <div class="button elements_button_3 {{ $property->status }}"><a href="#">{{ $property->status }}</a></div>
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
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

@endsection