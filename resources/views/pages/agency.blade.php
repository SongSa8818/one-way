@extends('master')
@section('title','Agency')
@section('content')

<div class="listings">
    <div class="container">
        <!-- Contact -->
        <div class="contact mb-5">
            <div class="row">
                <div class="col-lg-5 contact_col">
                    <div class="contact_title">Agency info</div>
                    <ul class="contact_info_list estate_contact">
                        <li class="contact_info_item d-flex flex-row">
                            <div class="contact_info_icon"><span class="fa fa-user"></span></div>
                            <div class="contact_info_text">{{ $user->full_name }}</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div class="contact_info_icon"><span class="fa fa-phone"></span></div>
                            <div class="contact_info_text">{{ $user->phone_number }}</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div class="contact_info_icon"><span class="fa fa-envelope"></span></div>
                            <div class="contact_info_text">{{ $user->email }}</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div class="contact_info_icon"><span class="fa fa-location-arrow"></span></div>
                            <div class="contact_info_text">{{ $user->address }}</div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <img src="{{ url('/uploads/profiles/'.@$user->picture) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection