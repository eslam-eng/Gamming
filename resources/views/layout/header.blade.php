@php use Illuminate\Http\Request; @endphp
<!-- header-area -->
<header>
    <div id="sticky-header" class="tg-header__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a href=""><img src="assets/img/logo/logo.png" alt="Logo"></a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="{{\Illuminate\Support\Facades\Request::is('/') ?'active' : ''}}"><a href="/">Home</a></li>
                                    <li class="{{\Illuminate\Support\Facades\Request::is('about-us') ?'active' : ''}}"><a href="/about-us">About Us</a></li>
                                    <li class="{{\Illuminate\Support\Facades\Request::is('games') ?'active' : ''}}"><a href="/games">Games</a></li>
                                    <li class="{{\Illuminate\Support\Facades\Request::is('community') ?'active' : ''}}"><a href="/community">Community</a></li>
                                    <li class="{{\Illuminate\Support\Facades\Request::is('global-awords') ?'active' : ''}}"><a href="/global-awords">Global Awards</a></li>
                                    <li class="{{\Illuminate\Support\Facades\Request::is('contact-us') ?'active' : ''}}"><a href="/contact-us">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="tgmenu__action d-none d-md-block">
                                <ul class="list-wrap">
                                    <!--
                                                                            <li class="search"><a href="#"><i class="flaticon-search-1"></i></a></li>

                                    -->
                                    <li class="side-toggle-icon" style="display:none">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="tgmobile__menu">
                        <nav class="tgmobile__menu-box">
                            <div class="close-btn"><i class="flaticon-swords-in-cross-arrangement"></i></div>
                            <div class="nav-logo">
                                <a href="{{route('index')}}"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                            </div>
                            <div class="tgmobile__search">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>
                            <div class="tgmobile__menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="list-wrap">
                                    <li><a href="https://www.linkedin.com/company/9284966/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.facebook.com/2024studios"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/2024studios/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://2024studios.blogspot.com/"><i class="fab fa-blogger-b"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="tgmobile__menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>

    <!-- header-search -->
    <div class="search__popup-wrap">
        <div class="search__layer"></div>
        <div class="search__close">
            <span><i class="flaticon-swords-in-cross-arrangement"></i></span>
        </div>
        <div class="search__wrap text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">... <span>Search Here</span> ...</h2>
                        <div class="search__form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Type keywords here" required>
                                <button class="search-btn"><i class="flaticon-loupe"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-search-end -->

    <!-- offCanvas-area -->
    <div class="offCanvas__wrap">
        <div class="offCanvas__body">
            <div class="offCanvas__top">
                <div class="offCanvas__logo logo">
                    <a href="{{route('index')}}"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                </div>
                <div class="offCanvas__toggle">
                    <i class="flaticon-swords-in-cross-arrangement"></i>
                </div>
            </div>
            <div class="offCanvas__content">
                <h2 class="title">Best Seller of Month Ideas for <span>NFT Wallet</span></h2>
                <div class="offCanvas__contact">
                    <h4 class="small-title">CONTACT US</h4>
                    <ul class="offCanvas__contact-list list-wrap">

                        <li><a href="mailto:info@2024studios.com">info@2024studios.com</a></li>

                    </ul>
                </div>
                <div class="offCanvas__newsletter">
                    <h4 class="small-title">Subscribe</h4>
                    <form action="#" class="offCanvas__newsletter-form">
                        <input type="email" placeholder="Get News & Updates">
                        <button type="submit"><i class="flaticon-send"></i></button>
                    </form>
                    <p>Subscribe dolor sitamet, consectetur adiping eli. Duis esollici tudin augue.</p>
                </div>
                <ul class="offCanvas__social list-wrap">
                    <li><a href="https://www.linkedin.com/company/9284966/"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.facebook.com/2024studios"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/2024studios/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://2024studios.blogspot.com/"><i class="fab fa-blogger-b"></i></a></li>
                </ul>
            </div>
            <div class="offCanvas__copyright">
                <p>Copyright © 2024 - By <span>STUDIOS</span></p>
            </div>
        </div>
    </div>
    <div class="offCanvas__overlay"></div>
    <!-- offCanvas-area-end -->

</header>
<!-- header-area-end -->
