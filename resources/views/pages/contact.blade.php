@extends('master')
@section('title','Contact')
@section('content')

<div class="listings">
    <div class="container">
        <!-- Contact -->
        <div class="contact">
            <div class="row">
                <div class="col-lg-7 contact_col">
                    @if(@$message != null)
                        {{ Form::model(@$message, array('route' => array('message.update', @$message->id), 'class' => '', 'method' => 'put')) }}
                    @else
                        {{ Form::model(@$message, array('route' => array('message.store'), 'class' => '')) }}
                    @endif
                    <div class="estate_contact_form">
                        <div class="contact_title">What can we help you? </div>
                        <div class="estate_contact_form_container">
                            <form id="estate_contact_form" class="estate_contact_form" action="post">
                                <div class="form-group">
                                    {{ Form::text('name', @$message->name, array('id' => "estate_contact_form_name",'class' => "estate_input_field estate_contact_form_name", 'placeholder' => "Name", 'required' => "required", 'data-error' => "Name is required.", 'autofocus')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::email('email', @$message->email, array('id' => "estate_contact_form_email",'placeholder' => 'E-mail','class' => "estate_input_field estate_contact_form_email",'required' => "required",'data-error' =>"Valid email is required.", 'autofocus')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::text('subject', @$message->subject, array('id' => "estate_contact_form_subject",'class' => "estate_input_field estate_contact_form_subject", 'placeholder' => "Subject", 'required' => "required", 'data-error' => "Subject is required.", 'autofocus')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('message', @$message->message, array('id' => "estate_contact_form_message",'class' => "estate_text_field estate_contact_form_message", 'placeholder' => "Message", 'required' => "required", 'data-error' => "Message is required.", 'autofocus')) }}
                                </div>
                                <button id="estate_contact_send_btn" type="submit" class="estate_contact_send_btn trans_200" value="Submit">send</button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 contact_col">
                    <div class="contact_title">contact info</div>
                    <ul class="contact_info_list estate_contact">
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
                            <div class="contact_info_text">{{ $contact_info->address }}</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
                            <div class="contact_info_text">{{ $contact_info->phone_number }}</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
                            <div class="contact_info_text">{{ $contact_info->email }}</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
                            <div class="contact_info_text">{{ $contact_info->website }}</div>
                        </li>
                    </ul>
                    <div class="estate_social">
                        <ul class="estate_social_list">
                            <li class="estate_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="estate_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="estate_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="estate_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li class="estate_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection