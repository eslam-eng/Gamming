@extends('layout.master')
@section('content')
    <!-- main-area -->
    <main class="main--area">

        <!-- slider-area -->
        <section class="slider__area slider__bg" data-background="assets/img/slider/slider_bg.jpg">
            <div class="slider-activee">
                <div class="single-slider">
                    <div class="container custom-container">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="slider__content">
                                    <!-- <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s">live gaming</h6> -->
                                    <h2 class="title wow fadeInUp" data-wow-delay=".5s">2024 studios</h2>
                                    <p class="wow fadeInUp" data-wow-delay=".8s">An Indie Game Studio</p>
                                    <div class="slider__btn wow fadeInUp" data-wow-delay="1.2s">
                                        <a href="{{route('contact-us')}}" class="tg-btn-1"><span>contact us</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="slider__img text-center">
                                    <img src="assets/img/new/Mug_2.png" data-magnetic alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__shapes">
                <img src="assets/img/slider/slider_shape01.png" alt="shape">
                <img src="assets/img/slider/slider_shape02.png" alt="shape">
                <img src="assets/img/slider/slider_shape03.png" alt="shape">
                <img src="assets/img/slider/slider_shape04.png" alt="shape">
            </div>

        </section>
        <!-- slider-area-end -->
        <div class="area-background" data-background="assets/img/bg/area_bg02.jpg">

            <!-- about-area -->
            <section class="about__area-two section-pt-100 section-pb-100">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-6 col-lg-6 order-0 order-lg-2">
                            <div class="about__funFact-images">
                                <img src="assets/img/Game/who2.png" alt="background" class="bg-shape">
                                <!--                            <img src="assets/img/new/whoweare.jpg" class="main-img" alt="image">-->
                            </div>
                            <!--
                                                    <div class="about__funFact-trophy">
                                                        <div class="icon"><img src="assets/img/icons/trophy.png" alt="trophy"></div>
                                                        <div class="content">
                                                            <h5>Tournament</h5>
                                                            <span>Development</span>
                                                        </div>
                                                    </div>
                            -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-10">
                            <div class="section__title text-start mb-30">
                                <h3 class="title">Who we are</h3>
                            </div>
                            <div class="about__content-two">
                                <p>We are a group of game developers & artists who create and deliver unique gaming experience</p>
                                <p>2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc</p>

                            </div>
                            <div class="about__content-bottom">
                                <!--
                                                            <div class="about__content-circle">
                                                                <img src="assets/img/icons/circle.svg" alt="img">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                                                    <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                                                    <text>
                                                                        <textPath href="#textPath">super nft Gaming sits</textPath>
                                                                    </text>
                                                                </svg>
                                                            </div>
                                -->
                                <div class="about__funFact-wrap">
                                    <!--
                                                                    <div class="about__funFact-lists">
                                                                        <div class="about__funFact-item">
                                                                            <h2 class="count">
                                                                                <span class="odometer" data-count="40"></span>
                                                                                <span class="formatting-mark">K</span>
                                                                            </h2>
                                                                            <p>Member</p>
                                                                        </div>
                                                                        <div class="about__funFact-item">
                                                                            <h2 class="count">
                                                                                <span class="odometer" data-count="12"></span>
                                                                                <span class="formatting-mark">K</span>
                                                                            </h2>
                                                                            <p>NFT</p>
                                                                        </div>
                                                                        <div class="about__funFact-item">
                                                                            <h2 class="count">
                                                                                <span class="odometer" data-count="30"></span>
                                                                                <span class="formatting-mark">K</span>
                                                                            </h2>
                                                                            <p>Artist</p>
                                                                        </div>
                                                                    </div>
                                    -->
                                    <div class="about__content-btns">
                                        <a href="{{route('about-us')}}" class="tg-btn-3 tg-svg">
                                            <div class="svg-icon" id="svg-6" data-svg-icon="assets/img/icons/shape.svg"></div>
                                            <span>read more</span>
                                        </a>
                                        <!--                                    <a href="https://www.youtube.com/watch?v=ssrNcwxALS4" class="popup-video"><i class="fas fa-play"></i><span class="text">How It Work</span></a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

        </div>



        <!-- area-background-start -->
        <div class="area-background" data-background="assets/img/bg/area_bg01.jpg">

            <!-- about-area -->
            <section class="about__area section-pt-100 section-pb-100" style="display: none">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-10">
                            <div class="section__title text-center mb-60">
                                <span class="sub-title tg__animate-text">know about us</span>
                                <h3 class="title">Our Features</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="about__tab-wrap">
                                <div class="about__buttons">
                                    <a href="#" class="tg-btn-2">buy Hero</a>
                                    <a href="#" class="tg-btn-2 -secondary">buy nfts</a>
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="about01-tab" data-bs-toggle="tab" data-bs-target="#about01" type="button" role="tab" aria-controls="about01" aria-selected="true"><span class="img-shape"></span><img src="assets/img/others/about_tab01.png" alt="img"></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="about02-tab" data-bs-toggle="tab" data-bs-target="#about02" type="button" role="tab" aria-controls="about02" aria-selected="false"><span class="img-shape"></span><img src="assets/img/others/about_tab02.png" alt="img"></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="about03-tab" data-bs-toggle="tab" data-bs-target="#about03" type="button" role="tab" aria-controls="about03" aria-selected="false"><span class="img-shape"></span><img src="assets/img/others/about_tab03.png" alt="img"></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="about04-tab" data-bs-toggle="tab" data-bs-target="#about04" type="button" role="tab" aria-controls="about04" aria-selected="false"><span class="img-shape"></span><img src="assets/img/others/about_tab04.png" alt="img"></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="about05-tab" data-bs-toggle="tab" data-bs-target="#about05" type="button" role="tab" aria-controls="about05" aria-selected="false"><span class="img-shape"></span><img src="assets/img/others/about_tab05.png" alt="img"></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="about06-tab" data-bs-toggle="tab" data-bs-target="#about06" type="button" role="tab" aria-controls="about06" aria-selected="false"><span class="img-shape"></span><img src="assets/img/others/about_tab06.png" alt="img"></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="about01" role="tabpanel" aria-labelledby="about01-tab">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-10">
                                    <div class="about__img">
                                        <img src="assets/img/others/about_img01.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-10">
                                    <div class="about__flex-wrap">
                                        <div class="about__content-wrap">
                                            <div class="about__content">
                                                <h4 class="title">human game</h4>
                                                <span class="rate">rate 50%</span>
                                                <p>Lorem ipsum dolor sit amet, consteur adipiscing Duis elementum sollicitudin is yaugue euismods Nulla ullamcorper. Morbi pharetra tellus miolslis, tincidunt massa venenatis.</p>
                                            </div>
                                            <div class="about__content-list">
                                                <ul class="list-wrap">
                                                    <li><img src="assets/img/icons/features_icon01.png" alt="img"> Chichi Dragon Ball</li>
                                                    <li><img src="assets/img/icons/features_icon02.png" alt="img"> Space Babe Night</li>
                                                    <li><img src="assets/img/icons/features_icon03.png" alt="img"> Dragon Ball</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="about__btn-wrap">
                                            <ul class="list-wrap">
                                                <li><a href="#">Dragon Ball</a></li>
                                                <li><a href="#">nft market</a></li>
                                                <li><a href="#">support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="about02" role="tabpanel" aria-labelledby="about02-tab">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-10">
                                    <div class="about__img">
                                        <img src="assets/img/others/about_img02.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-10">
                                    <div class="about__flex-wrap">
                                        <div class="about__content-wrap">
                                            <div class="about__content">
                                                <h4 class="title">Axie Infinity</h4>
                                                <span class="rate trendingNft__item-bottom"><a href="{{route('game-details')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                <p>Lorem ipsum dolor sit amet, consteur adipiscing Duis elementum sollicitudin is yaugue euismods Nulla ullamcorper. Morbi pharetra tellus miolslis, tincidunt massa venenatis.</p>
                                            </div>
                                            <div class="about__content-list">
                                                <ul class="list-wrap">
                                                    <li><img src="assets/img/icons/features_icon01.png" alt="img"> Chichi Dragon Ball</li>
                                                    <li><img src="assets/img/icons/features_icon02.png" alt="img"> Space Babe Night</li>
                                                    <li><img src="assets/img/icons/features_icon03.png" alt="img"> Dragon Ball</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="about__btn-wrap">
                                            <ul class="list-wrap">
                                                <li><a href="#">Dragon Ball</a></li>
                                                <li><a href="#">nft market</a></li>
                                                <li><a href="#">support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="about03" role="tabpanel" aria-labelledby="about03-tab">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-10">
                                    <div class="about__img">
                                        <img src="assets/img/others/about_img03.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-10">
                                    <div class="about__flex-wrap">
                                        <div class="about__content-wrap">
                                            <div class="about__content">
                                                <h4 class="title">The Walking Dead</h4>
                                                <span class="rate">rate 75%</span>
                                                <p>Lorem ipsum dolor sit amet, consteur adipiscing Duis elementum sollicitudin is yaugue euismods Nulla ullamcorper. Morbi pharetra tellus miolslis, tincidunt massa venenatis.</p>
                                            </div>
                                            <div class="about__content-list">
                                                <ul class="list-wrap">
                                                    <li><img src="assets/img/icons/features_icon01.png" alt="img"> Chichi Dragon Ball</li>
                                                    <li><img src="assets/img/icons/features_icon02.png" alt="img"> Space Babe Night</li>
                                                    <li><img src="assets/img/icons/features_icon03.png" alt="img"> Dragon Ball</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="about__btn-wrap">
                                            <ul class="list-wrap">
                                                <li><a href="#">Dragon Ball</a></li>
                                                <li><a href="#">nft market</a></li>
                                                <li><a href="#">support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="about04" role="tabpanel" aria-labelledby="about04-tab">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-10">
                                    <div class="about__img">
                                        <img src="assets/img/others/about_img04.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-10">
                                    <div class="about__flex-wrap">
                                        <div class="about__content-wrap">
                                            <div class="about__content">
                                                <h4 class="title">The Dogami</h4>
                                                <span class="rate">rate 65%</span>
                                                <p>Lorem ipsum dolor sit amet, consteur adipiscing Duis elementum sollicitudin is yaugue euismods Nulla ullamcorper. Morbi pharetra tellus miolslis, tincidunt massa venenatis.</p>
                                            </div>
                                            <div class="about__content-list">
                                                <ul class="list-wrap">
                                                    <li><img src="assets/img/icons/features_icon01.png" alt="img"> Chichi Dragon Ball</li>
                                                    <li><img src="assets/img/icons/features_icon02.png" alt="img"> Space Babe Night</li>
                                                    <li><img src="assets/img/icons/features_icon03.png" alt="img"> Dragon Ball</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="about__btn-wrap">
                                            <ul class="list-wrap">
                                                <li><a href="#">Dragon Ball</a></li>
                                                <li><a href="#">nft market</a></li>
                                                <li><a href="#">support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="about05" role="tabpanel" aria-labelledby="about05-tab">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-10">
                                    <div class="about__img">
                                        <img src="assets/img/others/about_img05.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-10">
                                    <div class="about__flex-wrap">
                                        <div class="about__content-wrap">
                                            <div class="about__content">
                                                <h4 class="title">The Sandbox</h4>
                                                <span class="rate">rate 75%</span>
                                                <p>Lorem ipsum dolor sit amet, consteur adipiscing Duis elementum sollicitudin is yaugue euismods Nulla ullamcorper. Morbi pharetra tellus miolslis, tincidunt massa venenatis.</p>
                                            </div>
                                            <div class="about__content-list">
                                                <ul class="list-wrap">
                                                    <li><img src="assets/img/icons/features_icon01.png" alt="img"> Chichi Dragon Ball</li>
                                                    <li><img src="assets/img/icons/features_icon02.png" alt="img"> Space Babe Night</li>
                                                    <li><img src="assets/img/icons/features_icon03.png" alt="img"> Dragon Ball</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="about__btn-wrap">
                                            <ul class="list-wrap">
                                                <li><a href="#">Dragon Ball</a></li>
                                                <li><a href="#">nft market</a></li>
                                                <li><a href="#">support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="about06" role="tabpanel" aria-labelledby="about06-tab">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-10">
                                    <div class="about__img">
                                        <img src="assets/img/others/about_img06.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-10">
                                    <div class="about__flex-wrap">
                                        <div class="about__content-wrap">
                                            <div class="about__content">
                                                <h4 class="title">Pegaxy Horses</h4>
                                                <span class="rate trendingNft__item-bottom"><a href="{{route('game-details')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                <p>Lorem ipsum dolor sit amet, consteur adipiscing Duis elementum sollicitudin is yaugue euismods Nulla ullamcorper. Morbi pharetra tellus miolslis, tincidunt massa venenatis.</p>
                                            </div>
                                            <div class="about__content-list">
                                                <ul class="list-wrap">
                                                    <li><img src="assets/img/icons/features_icon01.png" alt="img"> Chichi Dragon Ball</li>
                                                    <li><img src="assets/img/icons/features_icon02.png" alt="img"> Space Babe Night</li>
                                                    <li><img src="assets/img/icons/features_icon03.png" alt="img"> Dragon Ball</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="about__btn-wrap">
                                            <ul class="list-wrap">
                                                <li><a href="#">Dragon Ball</a></li>
                                                <li><a href="#">nft market</a></li>
                                                <li><a href="#">support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- gallery-area -->
            <section class="gallery__area fix section-pb-100 section-pt-100">
                <div class="gallery__slider">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-7 col-md-10">
                                <div class="section__title text-center mb-60">
                                    <span class="sub-title tg__animate-text">Our Games</span>
                                    <h3 class="title">Games for Clients</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-10 col-md-11">
                                <div class="swiper-container gallery-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/race/2f.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Color Swap : Mobile Puzzle Game"><img src="assets/img/Game/race/2f.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Race Condition</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('race')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>Educational Racing game, teaching kids coding principles while racing and fighting other cars. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/KINGDOM/1-games.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Visual Qaulity And Lighting"><img src="assets/img/Game/KINGDOM/1-games.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Kingdom Challenge</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('kingdom')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>Mobile racing game set in Saudi Arabia. where you race and visit different saudi cities </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/kooz/1--games-for-clients.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Games For Kids"><img src="assets/img/Game/kooz/1--games-for-clients.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Kooz</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('kooz')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>Mobile board game, the arabic version of Spy but with more culturelize relatable topics </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/letters_hero/1%20games.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Educational Content"><img src="assets/img/Game/letters_hero/1%20games.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Letters Hero</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('letters')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>Mobile endless runner game, teaching kids the alphabets </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/hady_bady/1-games.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="RGBe : Mobile Fast Arcade Game"><img src="assets/img/Game/hady_bady/1-games.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Hady Bady</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('hady')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>financial literacy mobile game, developed for AlexBank to teach children the 3 main elements of financial literacy: saving, spending and donating, through engaging edutainment activities. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/strip/2f.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Galaxy Rebound : Mobile Zen Style Game"><img src="assets/img/Game/strip/2f.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">SRIP - Human Rights </h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('srip')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>Serious game about the values of freedom , responsibility and inclusion </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/frog/1-games.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="FrogSqash : Teach Kids Programming"><img src="assets/img/Game/frog/1-games.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Frog Squash</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('frog')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>A road crossing educational game for kids with a twist of the mechanic to teach kids simple coding principles. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/the_passage/2f.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Secrets To Bonefire : Surreal Experience"><img src="assets/img/Game/the_passage/2f.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">The Passage</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('pass')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>A platformer educational game for kids teaching them simple programming and coding principles. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/ithraa/1-games.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Impulse : Mobile Puzzle Game"><img src="assets/img/Game/ithraa/1-games.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Ithraa - King Abdulaziz Cultural Center</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('ithraa')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>Over 200 educational gaming experiences for different age groups, covering various topics including but not limited to Maths, Science, History, Literature & more </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/abjadyat/1-games.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Impulse : Mobile Puzzle Game"><img src="assets/img/Game/abjadyat/1-games.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Abjadiyat</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('abjadiyat')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>Built 50+ mini game, integrated to a mega mobile app for teaching kids the arabic language </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a  href="assets/img/Game/phar/1-second-size.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Impulse : Mobile Puzzle Game"><img src="assets/img/Game/phar/2.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Pharmlator</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('pharmlator')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>Full simulation of a pharmacy day life, 3 types of 3D pharmacies, 70 cases, emergencies and bonus cases </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery__item">
                                                <div class="gallery__thumb">
                                                    <a href="assets/img/Game/Byte/Bg1.png" data-cursor="-theme" data-cursor-text="View <br> Image" class="popup-image" title="Beyti Bee"><img src="assets/img/Game/Byte/Bg1.png" alt="img"></a>
                                                </div>
                                                <div class="gallery__content">
                                                    <h3 class="title">Beyti Bee</h3>
                                                    <span class="rate trendingNft__item-bottom"><a href="{{route('beyti-bee')}}" class="bid-btn">More Details <i class="fas fa-long-arrow-alt-right"></i></a></span>
                                                </div>
                                                <div class="Description">
                                                    <p>Match 3 shooter game for Beyti Juice </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- scrollbar -->
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- gallery-area-end -->

        </div>
        <!-- area-background-end -->


        <!-- trending-nft-area -->
        <section class="trendingNft-area section-pt-120 section-pb-90 GamesSection">
            <div class="container">
                <div class="trendingNft__title-wrap">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="trendingNft__title">

                                <h2 class="title">Games for us <img src="assets/img/icons/fire.png" width="35" alt="icon"></h2>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="trendingNft__nav">
                                <button class="slider-button-prev"><i class="fas fa-angle-left"></i></button>
                                <button class="slider-button-next"><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container trendingNft-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="info">
                                            <h6 class="name">Secrets of a campfire</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <a href="{{route('secrets')}}"><img src="assets/img/Game/secret/1-350-240.png" alt="img"></a>
                                </div>
                                <div class="trendingNft__item-bottom" style="display: block">
                                    <p>Secrets of a Campfire is a peaceful atmospheric experience set in a camping environment that players can jump into to chill and relive their stresses.</p>
                                    <a href="{{route('secrets')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="info">
                                            <h6 class="name">Color Swap</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <a href="{{route('color')}}"><img src="assets/img/Game/color/1-350.png" alt="img"></a>
                                </div>
                                <div class="trendingNft__item-bottom" style="display: block">
                                    <p>A logical mobile puzzle game with an atmospheric experience where you solve puzzles by switching colors.</p>
                                    <a href="{{route('color')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="info">
                                            <h6 class="name">Impulse</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <a href="{{route('impulse')}}"><img src="assets/img/Game/impluse/1-350.png" alt="img"></a>
                                </div>
                                <div class="trendingNft__item-bottom" style="display: block">
                                    <p>A minimal mobile puzzle game with 70+ unique levels.</p>
                                    <a href="{{route('impulse')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="info">
                                            <h6 class="name">Puppy in Bubble Christmas Fall</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <a href="{{route('puppy')}}"><img src="assets/img/Game/puppy/1-350.png" alt="img"></a>
                                </div>
                                <div class="trendingNft__item-bottom" style="display: block">
                                    <p>2D endless game, control the bubble with the air fans</p>
                                    <a href="{{route('puppy')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="info">
                                            <h6 class="name">Skull Pong</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <a href="{{route('skull')}}"><img src="assets/img/Game/skull/1-350.png" alt="img"></a>
                                </div>
                                <div class="trendingNft__item-bottom" style="display: block">
                                    <p>Ping pong comes in a new halloween shape</p>
                                    <a href="{{route('skull')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- trending-nft-end -->

        <div class="area-background" data-background="assets/img/bg/area_bg02.jpg">

            <!-- streamers-area -->
            <section class="streamers__area section-pt-95 section-pb-100" style="display: none">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-10">
                            <div class="section__title text-center mb-60">
                                <span class="sub-title tg__animate-text">Our Games</span>
                                <h3 class="title">Games for us</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container streamers-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="streamers__item">
                                    <div class="streamers__thumb">
                                        <a href="{{route('game-details')}}"><img src="assets/img/team/streamers01.png" alt="img"></a>
                                    </div>
                                    <div class="streamers__content">
                                        <a href="{{route('game-details')}}"><h4 class="name"> Secrets of a campfire</h4></a>
                                        <p>Secrets of a Campfire is a peaceful atmospheric experience set in a camping environment that players can jump into to chill and relive their stresses.</p>
                                        <!--
                                                                            <div class="DowenloadLinkss">
                                                                                <a href="#" class="Android"><img src="assets/img/playstore.png"></a>
                                                                                <a href="#" class="Iphone"><img src="assets/img/safari.png"></a>
                                                                            </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="streamers__item">
                                    <div class="streamers__thumb">
                                        <a href="{{route('game-details')}}"><img src="assets/img/team/streamers02.png" alt="img"></a>
                                    </div>
                                    <div class="streamers__content">
                                        <a href="{{route('game-details')}}"><h4 class="name">Color Swap</h4></a>
                                        <p>A logical mobile puzzle game with an atmospheric experience where you solve puzzles by switching colors.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="streamers__item">
                                    <div class="streamers__thumb">
                                        <a href="{{route('game-details')}}"><img src="assets/img/team/streamers03.png" alt="img"></a>
                                    </div>
                                    <div class="streamers__content">
                                        <a href="{{route('game-details')}}"><h4 class="name">Impulse</h4></a>
                                        <p>A minimal mobile puzzle game with 70+ unique levels.</p>
                                        <!--
                                                                            <div class="DowenloadLinkss">
                                                                                <a href="https://play.google.com/store/apps/details?id=com.studios2024.Impulse" class="Android"><img src="assets/img/playstore.png"></a>
                                                                                <a href="https://apps.apple.com/us/app/impulse-brain-bending/id1075880285" class="Iphone"><img src="assets/img/safari.png"></a>
                                                                            </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="streamers__item">
                                    <div class="streamers__thumb">
                                        <a href="{{route('game-details')}}"><img src="assets/img/team/streamers04.png" alt="img"></a>
                                    </div>
                                    <div class="streamers__content">
                                        <a href="{{route('game-details')}}"><h4 class="name">Puppy in Bubble Christmas Fall</h4></a>
                                        <p> 2D endless game, control the bubble with the air fans</p>
                                        <!--
                                                                            <div class="DowenloadLinkss">
                                                                                <a href="#" class="Android"><img src="assets/img/playstore.png"></a>
                                                                                <a href="#" class="Iphone"><img src="assets/img/safari.png"></a>
                                                                            </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="streamers__item">
                                    <div class="streamers__thumb">
                                        <a href="{{route('game-details')}}"><img src="assets/img/team/streamers05.png" alt="img"></a>
                                    </div>
                                    <div class="streamers__content">
                                        <a href="{{route('game-details')}}"> <h4 class="name">Skull Pong</h4></a>
                                        <p>Ping pong comes in a new halloween shape</p>
                                        <!--
                                                                            <div class="DowenloadLinkss">
                                                                                <a href="#" class="Android"><img src="assets/img/playstore.png"></a>
                                                                                <a href="#" class="Iphone"><img src="assets/img/safari.png"></a>
                                                                            </div>
                                        -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="streamers__pagination">
                        <div class="slider-button-prev streamers__pagination-arrow"><i class="fas fa-angle-left"></i></div>
                        <div class="swiper-pagination streamers__pagination-dots"></div>
                        <div class="slider-button-next streamers__pagination-arrow"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </section>
            <!-- streamers-area-end -->
        </div>
        <!-- team-area -->
        <section class="team__area team-bg section-pt-130 section-pb-100" data-background="assets/img/bg/team_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="section__title text-center mb-60">
                            <span class="sub-title tg__animate-text">our team member</span>
                            <h3 class="title">ACTIVE TEAM MEMBERS</h3>
                        </div>
                    </div>
                </div>

                <div class="swiper-container trendingNft-active">
                    <div class="swiper-wrapper2 row" style="justify-content: center">
                        <div class="colo-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="team__item">
                                <div class="team__thumb">
                                    <a href="https://www.linkedin.com/in/ahmedmohi/" target="_blank"><img src="assets/img/Game/team/ahmed.png" alt="img"></a>
                                </div>
                                <div class="team__content">
                                    <h4 class="name"><a href="#">Ahmed Mohi</a></h4>
                                    <span class="designation">Co-Founder / Game Developer / Game Designer</span>
                                    <p>Level Design Guru</p>
                                </div>
                            </div>
                        </div>
                        <div class="colo-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="team__item">
                                <div class="team__thumb">
                                    <a href="https://www.linkedin.com/in/ahmed-najeeb-87379178/" target="_blank"><img src="assets/img/Game/team/najeeb.png" alt="img"></a>
                                </div>
                                <div class="team__content">
                                    <h4 class="name"><a href="#">Ahmed Najeeb</a></h4>
                                    <span class="designation">Co-Founder / Game Developer / Music composer</span>
                                    <p>A gaming enthusiast since the era of "LionKing.exe [Enter]"! </p>
                                </div>
                            </div>
                        </div>
                        <div class="colo-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="team__item">
                                <div class="team__thumb">
                                    <a href="https://www.linkedin.com/in/walidkhairy/" target="_blank"><img src="assets/img/Game/team/walid.png" alt="img"></a>
                                </div>
                                <div class="team__content">
                                    <h4 class="name"><a href="#">Walid Khairy</a></h4>
                                    <span class="designation">Co-Founder / Game Developer / Level Designer</span>
                                    <p>Standup Comedian by night</p>
                                </div>
                            </div>
                        </div>
                        <div class="colo-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="team__item">
                                <div class="team__thumb">
                                    <a href="https://www.linkedin.com/in/maria0magdi/" target="_blank"><img src="assets/img/Game/team/maria.png" alt="img"></a>
                                </div>
                                <div class="team__content">
                                    <h4 class="name"><a href="#">Maria Magdi</a></h4>
                                    <span class="designation">3D Artist</span>
                                    <p>Fluffy animals are her greatest weakness</p>
                                </div>
                            </div>
                        </div>
                        <div class="colo-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="team__item">
                                <div class="team__thumb">
                                    <a href="https://www.linkedin.com/in/khaledyousefgp/" target="_blank"><img src="assets/img/Game/team/khaled.png" alt="img"></a>
                                </div>
                                <div class="team__content">
                                    <h4 class="name"><a href="#">Khaled Yousef</a></h4>
                                    <span class="designation">Game Developer</span>
                                    <p>Watch out for a hardcore gamer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                                        <div class="trendingNft__nav justify-content-center" >
                                                    <button class="slider-button-prev"><i class="fas fa-angle-left"></i></button>
                                                    <button class="slider-button-next"><i class="fas fa-angle-right"></i></button>
                                                </div>
                    -->
                </div>

            </div>
        </section>
        <!-- team-area-end -->


        <!-- services-area -->
        <section class="services-area services__bg-color section-pt-100 section-pb-100">
            <div class="container">
                <div class="row align-items-end align-items-xl-start" style="justify-content: center">
                    <div class="col-lg-12">
                        <div class="section__title mb-30 text-center">
                            <h3 class="title">Show offs</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="VideoBox" style="display: block; height: 400px; width: 100%">
                            <iframe style="display: block; height: 100%; width: 100%" src="https://www.youtube.com/embed/_CgAT0wOV6U?si=gORxcZmOV2XoOIjT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="VideoBox" style="display: block; height: 400px; width: 100%">
                            <iframe style="display: block; height: 100%; width: 100%" src="https://www.youtube.com/embed/tHA-rHzxDo8?si=0jnIvZgg-8Nb_Le5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- services-area-end -->


        <!-- video-area -->
        <section class="video__area video-bg tg-jarallax" data-background="assets/img/bg/video_bg.jpg" style="display: none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-11">
                        <div class="video__content text-center">
                            <!-- <a href="https://www.youtube.com/watch?v=ssrNcwxALS4" class="popup-video"><i class="flaticon-play"></i></a> -->
                            <h2 class="title">JOIN THE <span>COMMUNITY</span></h2>
                            <p>Join our Discord community and choosec onsteur</p>
                            <a href="{{route('contact-us')}}" target="_blank" class="video__btn tg-btn-1"><span>Contact Us Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-area-end -->


        <!-- brand-area -->
        <section class="brand-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand__title text-center">
                            <h2 class="title">Our clients & partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row brand-active">
                    <div class="col">
                        <div class="brand__item">
                            <a target="_blank" href="https://terminaltwo.com/" class="brand__link"><img src="assets/img/Game/partners/1.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="brand__item">
                            <a target="_blank" href="https://hivestudio.net/" class="brand__link"><img src="assets/img/Game/partners/2.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="brand__item">
                            <a target="_blank" href="https://appsinnovate.com/" class="brand__link"><img src="assets/img/Game/partners/3.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="brand__item">
                            <a target="_blank" href="https://2oolameme.com/" class="brand__link"><img src="assets/img/Game/partners/4.png" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="brand__item">
                            <a target="_blank" href="https://primepress.com/" class="brand__link"><img src="assets/img/Game/partners/5.png" alt="brand"></a>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- brand-area-end -->

        <!-- trending-nft-area -->
        <section class="trendingNft-area section-pt-100 section-pb-90" style="display: none">
            <div class="container">
                <div class="trendingNft__title-wrap">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="trendingNft__title">
                                <h2 class="title">Our Testimonials <img src="assets/img/icons/fire.png" width="35" alt="icon"></h2>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="trendingNft__nav">
                                <button class="slider-button-prev"><i class="fas fa-angle-left"></i></button>
                                <button class="slider-button-next"><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container trendingNft-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="image">
                                            <a href="#"><img src="assets/img/nft/nft_avatar01.png" alt="img"></a>
                                        </div>
                                        <div class="info">
                                            <h6 class="name">Crypto Max</h6>
                                            <a href="#" class="userName">@Jon Max</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <div class="Descrption">
                                        <p>2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc 2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="image">
                                            <a href="#"><img src="assets/img/nft/nft_avatar01.png" alt="img"></a>
                                        </div>
                                        <div class="info">
                                            <h6 class="name">Crypto Max</h6>
                                            <a href="#" class="userName">@Jon Max</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <div class="Descrption">
                                        <p>2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc 2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="image">
                                            <a href="#"><img src="assets/img/nft/nft_avatar01.png" alt="img"></a>
                                        </div>
                                        <div class="info">
                                            <h6 class="name">Crypto Max</h6>
                                            <a href="#" class="userName">@Jon Max</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <div class="Descrption">
                                        <p>2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc 2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="image">
                                            <a href="#"><img src="assets/img/nft/nft_avatar01.png" alt="img"></a>
                                        </div>
                                        <div class="info">
                                            <h6 class="name">Crypto Max</h6>
                                            <a href="#" class="userName">@Jon Max</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <div class="Descrption">
                                        <p>2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc 2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="trendingNft__item">
                                <div class="trendingNft__item-top">
                                    <div class="trendingNft__item-avatar">
                                        <div class="image">
                                            <a href="#"><img src="assets/img/nft/nft_avatar01.png" alt="img"></a>
                                        </div>
                                        <div class="info">
                                            <h6 class="name">Crypto Max</h6>
                                            <a href="#" class="userName">@Jon Max</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="trendingNft__item-image">
                                    <div class="Descrption">
                                        <p>2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc 2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending-nft-end -->

    </main>
    <!-- main-area-end -->
@endsection
