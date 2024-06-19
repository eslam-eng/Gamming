<!-- footer-start -->
<footer class="footer-style-one">
    <div class="footer__top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-7">
                    <div class="footer-widget">
                        <div class="footer-logo logo">
                            <a href="{{route('index')}}"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                        </div>
                        <div class="footer-text">
                            <p class="desc">We are a group of game developers & artists who create and deliver
                                unique gaming experience
                            </p>
                            <a href="#" class="mail">info@2024studios.com</a>
                            <p class="social-title">Active <span>With Us <i class="fas fa-angle-double-right"></i></span></p>
                            <div class="footer-social">
                                <a href="https://www.linkedin.com/company/9284966/"><img src="assets/img/icons/linkedin.png" alt="iocn"></a>
                                <a href="https://www.facebook.com/2024studios"><img src="assets/img/icons/facebook.png" alt="iocn"></a>
                                <a href="https://www.instagram.com/2024studios/"><img src="assets/img/icons/social_icon03.png" alt="iocn"></a>
                                <a href="https://2024studios.blogspot.com/"><img src="assets/img/icons/blogger.png" alt="iocn"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                    <div class="footer-widget widget_nav_menu">
                        <h4 class="fw-title">quick link</h4>
                        <ul class="list-wrap menu">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about-us')}}">About</a></li>
                            <li><a href="{{route('games')}}">Games</a></li>
                            <li><a href="{{route('community')}}">Community</a></li>
                            <li><a href="{{route('global-awords')}}">Global Awards</a></li>
                            <li><a href="{{route('contact-us')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6">
                    <div class="footer-widget widget_nav_menu">
                        <h4 class="fw-title">Supports</h4>
                        <ul class="list-wrap menu">
                            <li><a href="#">Setting & Privacy</a></li>
                            <li><a href="#">Help & Support</a></li>
                            <li><a href="#">Live Auctions</a></li>
                            <li><a href="#">Item Details</a></li>
                            <li><a href="#">24/7 Supports</a></li>
                            <li><a href="#">Our News</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="footer-widget">
                        <h4 class="fw-title">SAY HI</h4>
                        <div class="footer-newsletter">
                            <p>For business inquiries or if you have a game in mind</p>
                            <!--
                                                            <form action="#" class="footer-newsletter-form">
                                                                <input type="email" placeholder="Your email address">
                                                                <button type="submit"><i class="flaticon-paper-plane"></i></button>
                                                            </form>
                            -->
                            <a class="COnatctBTN" href="{{route('contact-us')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="copyright__text text-center">
                        <p>Copyright © 2024 - All Rights Reserved By <span>2024 Studios</span></p>
                    </div>
                </div>
                <!-- <div class="col-md-5">
                    <div class="copyright__card text-center text-md-end">
                        <img src="assets/img/others/payment_card.png" alt="img">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</footer>
<!-- footer-start-end -->



<!-- JS here -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/tg-page-head.js"></script>
<!--    <script src="assets/js/ajax-form.js"></script>-->
<script src="assets/js/main.js"></script>
@yield('custom-js')
</body>
</html>
