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
                                <h2 class="title">Global Awards </h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Global Awards </li>
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
                <div class="row align-items-end align-items-xl-start" style="justify-content: center">
                    <div class="col-lg-12">
                        <div class="section__title mb-30 text-center">
                            <h3 class="title">Imagine Cup 2014 3rd Place worldwide winner</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services__images">
                            <div class="services__images-item active">
                                <img src="assets/img/Game/PP.jpg" alt="img">
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="VideoBox" style="display: block; height: 600px; width: 100%">
                            <iframe style="display: block; height: 100%; width: 100%" src="https://www.youtube.com/embed/cQ6_IJcFBJg?si=SThsimIjjmv2nvZW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- services-area-end -->


    </main>
    <!-- main-area-end -->
@endsection
