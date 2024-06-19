@extends('layout.master')
@section('content')
    <!-- main-area -->
    <main class="main--area">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area" data-background="assets/img/bg/breadcrumb_bg01.jpg">
            <div class="container">
                <div class="breadcrumb__wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="breadcrumb__content">
                                <h2 class="title">ABOUT US</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">ABOUT US</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
                            <div class="breadcrumb__img">
                                <img src="assets/img/logo/character.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <div class="area-background" data-background="assets/img/bg/area_bg02.jpg">

            <!-- about-area -->
            <section class="about__area-two section-pt-100 section-pb-100">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-6 col-lg-6 order-0 order-lg-2">
                            <div class="about__funFact-images">
                                <img src="assets/img/new/whoweare.jpg" alt="background" class="bg-shape">
                                <!--                            <img src="assets/img/new/whoweare.jpg" class="main-img" alt="image">-->
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-10">
                            <div class="section__title text-start mb-30">
                                <h3 class="title">Who we are</h3>
                            </div>
                            <div class="about__content-two">
                                <p>We are a group of game developers & artists who create and deliver unique gaming experience</p>
                                <p>2024 Studios is an egyptian game studio, founded by three geeks who were bounded to meet in a game developers' Lab, number "2024". With over 9 years of experience in delivering games on multiple platforms including android, ios, web & pc</p>
                            </div>
                            <!--
                                                    <div class="about__content-bottom" style="margin-top: 10px;">

                                                        <div class="about__funFact-wrap">

                                                            <div class="about__content-btns">

                                                                <a href="https://www.youtube.com/watch?v=ssrNcwxALS4" class="popup-video"><i class="fas fa-play"></i><span class="text">How It Work</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                            -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

        </div>

        <!-- roadMap-area -->
        <section style="display: none" class="roadMap__area roadMap-bg section-pt-100 section-pb-100" data-background="assets/img/bg/roadmap_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="roadMap__inner">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="roadMap__content">
                                        <h2 class="title">Our History</h2>
                                        <p>With Season 1 Ending with our play and Duis elementum sollicitudin is yaugue euismods Nulla ulla Player-focused updates games from Mobile App and Enjoy.</p>

                                    </div>
                                    <div class="roadMap__img">
                                        <img src="assets/img/others/roadmap.png" class="tg-parallax" data-scale="1.5" data-orientation="down" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6">
                                    <div class="roadMap__steps-wrap">
                                        <div class="roadMap__steps-item active">
                                            <h3 class="title">2024</h3>
                                            <ul class="roadMap__list list-wrap">
                                                <li class="active tg__animate-text style2">Battle Practice Mode</li>

                                            </ul>
                                            <img src="assets/img/others/roadmap_img.png" alt="img" class="roadMap__steps-img">
                                        </div>
                                        <div class="roadMap__steps-item">
                                            <h3 class="title">2023</h3>
                                            <ul class="roadMap__list list-wrap">
                                                <li class="active tg__animate-text style2">Land Creation & Building</li>

                                            </ul>
                                            <img src="assets/img/others/roadmap_img.png" alt="img" class="roadMap__steps-img">
                                        </div>
                                        <div class="roadMap__steps-item">
                                            <h3 class="title">2022</h3>
                                            <ul class="roadMap__list list-wrap">
                                                <li class="active tg__animate-text style2">Switch to 3D gameplay</li>

                                            </ul>
                                            <img src="assets/img/others/roadmap_img.png" alt="img" class="roadMap__steps-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- roadMap-area-end -->

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



        <!-- team-area -->
        <section class="team__area team-bg section-pt-130 section-pb-100" data-background="assets/img/bg/team_bg.jpg" style="display: none">
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
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
                            <div class="team__item">
                                <div class="team__thumb">
                                    <a href="https://www.linkedin.com/in/maria0magdi/" target="_blank"><img src="assets/img/Game/team/maria.png" alt="img"></a>
                                </div>
                                <div class="team__content">
                                    <h4 class="name"><a href="#">Maria Magdi</a></h4>
                                    <span class="designation">3D Artist</span>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trendingNft__nav justify-content-center" >
                        <button class="slider-button-prev"><i class="fas fa-angle-left"></i></button>
                        <button class="slider-button-next"><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>

            </div>
        </section>
        <!-- team-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
