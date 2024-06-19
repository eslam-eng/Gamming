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
                                <h2 class="title">Community </h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Community </li>
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

        <!-- services-area -->
        <section class="services-area services__bg-color section-pt-100 section-pb-100">
            <div class="container">
                <div class="row align-items-end align-items-xl-start">
                    <div class="col-lg-6">
                        <div class="section__title text-start mb-65">
                            <span class="sub-title tg__animate-text">about us</span>
                            <h3 class="title">Run Double Jump</h3>
                        </div>
                        <div class="services__wrapper">
                            <div class="services__item">
                                <!--
                                                                <div class="services__icon">
                                                                    <i class="flaticon-diamond"></i>
                                                                </div>
                                -->
                                <div class="services__content">
                                    <h4 class="title"><a href="#">An Indie Gaming Gathering</a></h4>
                                    <p>One of our goals is the game development community in Egypt, the studio, together with IGDA Egypt Chapter, co-organized "Run Double Jump" in 2015, the 1st Indie game related event in Egypt for both gamers and developers to gather and meet and bring together Egypt's current community. Giving also an opportunity to the best independent developers to showcase their work to the public, get some feedback and attend various talks about tech, art and business.</p>
                                    <p>Since 'Run Double Jump 2016', we have made a partnership with 'Casual Connect', one of the biggest conventions worldwide for game developers. Each year we nominate to them a winner game from Run Double Jump's showcase to Participate on Casual Connect's show floor through their special competition 'Indie Prize'.</p>
                                </div>
                            </div>
                            <!--
                                                        <div class="services__item">
                                                            <div class="services__icon">
                                                                <i class="flaticon-user-profile"></i>
                                                            </div>
                                                            <div class="services__content">
                                                                <h4 class="title"><a href="#">Values</a></h4>
                                                                <p>Lorem ipsum dolor sitamet const adipiscng Duis eletum sollicitudin is yaugue euismods</p>
                                                            </div>
                                                        </div>
                            -->

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services__images">
                            <div class="services__images-item active">
                                <img src="assets/img/Game/community.jpg" alt="img">
                                <!--
                                                                <a href="#" class="services__link">
                                                                    <i class="flaticon-next"></i>
                                                                </a>
                                -->
                            </div>
                            <!--
                                                        <div class="services__images-item">
                                                            <img src="assets/img/others/services_img02.jpg" alt="img">
                                                            <a href="#" class="services__link">
                                                                <i class="flaticon-next"></i>
                                                            </a>
                                                        </div>
                            -->

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="services__images">
                            <div class="services__images-item active">
                                <img src="assets/img/Game/ev1.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services__images">
                            <div class="services__images-item active">
                                <img src="assets/img/Game/ev2.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->


    </main>
    <!-- main-area-end -->
@endsection
