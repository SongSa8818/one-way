<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Footer About -->

            <div class="col-lg-3 footer_col">
                <div class="footer_col_title">
                    <div class="logo_container">
                        <a href="#">
                            <div class="logo">
                                <img src="images/logo.png" alt="">
                                <span>OneWay Realty</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="footer_social">
                    <ul class="footer_social_list">
                        <li class="footer_social_item"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="footer_social_item"><a href="https://www.wechat.com/"><i class="fab fa-wechat"></i></a></li>
                        <li class="footer_social_item"><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        <li class="footer_social_item"><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="footer_social_item"><a href="https://wwww.youtube.com"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <ul>

                    </ul>
                </div>
            </div>

            <!-- Footer Contact -->

            <div class="col-lg-3 footer_col">
                <div class="footer_col_title">Hot Line
                    <hr align="left" width="100%" color="#fffff">
                </div>
                <div class="footer_contact_form_container">

                    <li class="contact_info_item d-flex flex-row">
                        <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
                        <div class="contact_info_text"><a href="#">{{ @$contact_info->phone_number }}</a></div>
                    </li>
                </div>
            </div>

            <div class="col-lg-3 footer_col">
                <div class="footer_col_title">Email Us For Help
                    <hr align="left" width="100%" color="#fffff">
                </div>
                <ul class="contact_info_list">
                    <li class="contact_info_item d-flex flex-row">
                        <div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
                        <div class="contact_info_text"><a href="mailto:{{ @$contact_info->email }}?Subject=Hello" target="_top">{{ @$contact_info->email }}</a></div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 footer_col">
                <div class="footer_col_title">Fine My Location
                    <hr align="left" width="100%" color="#fffff">
                </div>
                <ul class="contact_info_list">
                    <li class="contact_info_item d-flex flex-row">
                        <div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
                        <div class="contact_info_text"><a href="#">{{ @$contact_info->address }}</a></div>
                    </li>

                </ul>
            </div>


        </div>
    </div>
</footer>