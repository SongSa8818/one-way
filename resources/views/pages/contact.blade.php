@extends('master')
@section('title','Contact')
@section('content')

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="The Estate Teplate">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

<div class="listings">
    <div class="container">
        <!-- Contact -->
        <div class="contact">
            <div class="row">
                <div class="col-lg-6 contact_col">
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

                <div class="col-lg-3 contact_col">
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

                <div class="col-lg-3 contact_col">
                    <div class="contact_title">about</div>
                    <div class="estate_about_text">
                        <p>Lorem ipsum dolor sit amet, cons ectetur  quis ferme adipiscing elit. Suspen dis se tellus eros, placerat quis ferme ntum et, adipiscingvive rra sit ipsum amet lacus. </p>
                        <p>Nam gravida quis placerat quis fe rme ntum et ferme sadipiscinge te llus semper augue.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Map -->

        <div class="estate_map">
            <!--<div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="map"></div>
                </div>
            </div>-->
        </div>
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

@endsection