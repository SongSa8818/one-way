@extends('master')
@section('title','Contact')
@section('content')

<div class="listings">
    <div class="container">
        <!-- Contact -->
        <div class="contact">
            <div class="row">
                <div class="col-lg-7 contact_col">
                    <div class="estate_contact_form">
                        <div class="contact_title">say hello to One Way Realty</div>
                        <div class="estate_contact_form_container">
                            <form id="estate_contact_form" class="estate_contact_form" action="post">
                                <input id="estate_contact_form_name" class="estate_input_field estate_contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                                <input id="estate_contact_form_email" class="estate_input_field estate_contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                                <input id="estate_contact_form_subject" class="estate_input_field estate_contact_form_subject" type="email" placeholder="Subject" required="required" data-error="Subject is required.">
                                <textarea id="estate_contact_form_message" class="estate_text_field estate_contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
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
                            <div class="contact_info_text">#2005 No.05 SangKat Kurklaing Khan SenSok phnom Penh City</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
                            <div class="contact_info_text">+855-010-873-132</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
                            <div class="contact_info_text"><a href="mailto:onewayrealty@gmail.com?Subject=Hello" target="_top">onewayrealty@gmail.com</a></div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
                            <div class="contact_info_text"><a href="https://onewayrealty.com">www.onewayrealty.com</a></div>
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