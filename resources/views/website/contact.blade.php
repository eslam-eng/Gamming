@extends('layout.master')
@section('content')
    <!-- main-area -->
    <main class="main--area">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb__hide-img" data-background="assets/img/bg/breadcrumb_bg02.jpg">
            <div class="container">
                <div class="breadcrumb__wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb__content">
                                <h2 class="title">Contact us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="contact__content">
                            <h2 class="overlay-title"><span>join us</span></h2>
                            <h2 class="title">CONTACT US AND FIND YOUR Game</h2>
                            <p>We are a group of game developers & artists who create and deliver unique gaming experience</p>
                            <div class="footer-el-widget">
                                <h4 class="title">information</h4>
                                <ul class="list-wrap">

                                    <li><a href="mailto:info@2024studios.com">info@2024studios.com</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="contact__form-wrap">
                            <form id="contact-form" action="{{route('contact-us')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-grp">
                                            <input name="name" type="text" placeholder="Name *" required>
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-grp">
                                            <input name="email" type="email" placeholder="Email *" required>
                                        </div>
                                        @error('email')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-grp message-grp">
                                    <textarea name="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                                </div>
                                @error('message')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                                <button class="submit-btn">Submit Now</button>
                            </form>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- contact-map -->
        <!--
                <div class="contact-map">
                    <iframe src="https://geo-devrel-javascript-samples.web.app/samples/style-array/app/dist/" allowfullscreen="" loading="lazy"></iframe>
                </div>
        -->
        <!-- contact-map-end -->

    </main>
    <!-- main-area-end -->

@endsection
