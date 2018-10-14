@extends('master')
@section('title','Offering property')

@section('content')

<!-- Listings -->

<div class="listings">
    <div class="container">

        <div class="row mb-5">
            <div class="col">
                <div class="section_title text-center">
                    <h3>Offer</h3>
                    <span class="section_subtitle">Properties are offered</span>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Search Sidebar -->

            <div class="col-lg-4 sidebar_col">
                <h5>Advertise banner</h5>
            </div>
            <!-- Listings -->

            <div class="col-lg-8 listings_col">

                <!-- Listings Item -->
                @foreach($offers as $offer)
                <div class="listing_item">
                    <div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
                        <div class="listing_image_container">
                            <div class="listing_image">
                                <div class="listing_background" style="background-image:url({{ url('/uploads/'.$offer->img) }})"></div>
                            </div>
                        </div>
                        <div class="listing_content">
                            <div class="listing_title"><a href="{{ route('property.index') }}">{{ $offer->title }}</a></div>

                            <div class="featured_card_box d-flex flex-row align-items-center trans_300 p-0">
                                <div class="featured_card_box_content p-10">
                                    <div class="featured_card_price_title trans_300">Price</div>
                                    <div class="featured_card_price trans_300">${{ $offer->price }}</div>
                                </div>
                                <div class="featured_card_box_content">
                                    <div class="featured_card_price_title trans_300">Offer amount</div>
                                    <div class="featured_card_price trans_300 text-danger">${{ $offer->offer_amount }}</div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <span class="room_title">Agency</span>
                                    <div class="room_content">
                                        <div class="room_image"><a href="#"><img src="images/agent_4.jpg" class="img-agent-booked rounded-circle" alt=""></a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <span class="room_title">Customer name</span>
                                    <div class="room_content"><span class="room_tag customer_tag"><a href="#" data-toggle="modal" data-target="#exampleModalCenter{{ $offer->id }}"> {{ $offer->full_name }} </a></span></div>
                                </div>
                            </div>
                            <div class="room_tags">
                                <div class="button btn-info">
                                    <a href="" data-toggle="modal" data-target="#acceptOffer{{ $offer->id }}">Accept</a>
                                </div>
                                <div class="button btn-warning pull-right">
                                    <a href="" data-toggle="modal" data-target="#rejectOffer{{ $offer->id }}">Reject</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="acceptOffer{{ $offer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            {{ Form::model(@$offer, array('route' => array('property.accept', @$offer->property_id), 'class' => '', 'method' => 'put')) }}
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>Are you sure to accept this offer?</h3>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary w-120 h-40" data-dismiss="modal">No</button>
                                <button type="submit" type="button" class="btn btn-primary w-120 h-40">Yes</button>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="rejectOffer{{ $offer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            {{ Form::model(@$offer, array('route' => array('property.reject', @$offer->property_id), 'class' => '', 'method' => 'put')) }}
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>Are you sure to reject this offer?</h3>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary w-120 h-40" data-dismiss="modal">No</button>
                                <button type="submit" type="button" class="btn btn-primary w-120 h-40">Yes</button>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>


        <div class="row">
            <div class="col clearfix">
                <div class="listings_nav">
                    {{ $offers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

@endsection