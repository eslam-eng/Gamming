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
                                <h2 class="title">Blog Details</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">blog details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog-area blog-details-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="blog-post-wrapper">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <img src="assets/img/blog/blog_post03.jpg" alt="img">
                            </div>
                            <div class="blog-post-content blog-details-content">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li>By<a href="#">Admin</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Aug 16, 2023</li>
                                        <li><i class="far fa-comments"></i><a href="#">No comments</a></li>
                                    </ul>
                                </div>
                                <h2 class="title">play to earn crypto games place</h2>
                                <p>Excepteur sint occaecat atat non proident, sunt in culpa qui officia deserunt mollit anim id est labor umLor em ipsum dolor amet, consteur adiscing Duis elentum solliciin is yaugue euismods Nulla ullaorper. Ipsum is simply dummy text of  printing and typeetting industry. Lorem Ipsum has been the industry's standsaard sipiscing Duis elementum solliciin. Duis aute irure dolor in repderit in voluptate velit esse cillum dolorliquip ex ea commodo repderit in voluptate consequat nulla ullaorper.</p>
                                <blockquote>
                                    <p>Duis elentum solliciin is yaugue euismods Nulla ullaorper. Ipsum is simply dummy text of printing and typeetting industry.</p>
                                </blockquote>
                                <p>Axcepteur sint occaecat atat non proident, sunt in culpa qui officia deserunt mollit anim id est labor umLor em ipsum dolor amet, consteur adiscing Duis elentum solliciin is yaugue euismods Nulla ullaorper. Ipsum is simply dummy text of printing and typeetting industry. Lorem Ipsum has been the industry's standsaard sipiscing Duis elementum solliciin. Duis aute irure dolor in repderit.</p>
                                <p>Simply dummy text of printing and typeetting industry. Lorem Ipsum has been the industry's standsaard sipiscing Duis elementum solliciin.Duis aute irure dolor in repderit.</p>
                                <div class="blog-details-inner">
                                    <h4 class="inner-title">nft games android no investment</h4>
                                    <p>Axcepteur sint occaecat atat non proident, sunt in culpa qui officia deserunt mollit anim id est labor umLor em ipsum dolor amet, consteur adiscing Duis elentum solliciin is yaugue euismods Nulla ullaorper. Ipsum is simply dummy text of  printing and typeetting industry. Lorem Ipsum has been the industry's standsaard sipiscing Duis elementum solliciin.Duis aute irure dolor in repderit.</p>
                                </div>
                                <div class="blog-details-inner-img">
                                    <img src="assets/img/blog/blog_post02.jpg" alt="img">
                                </div>
                                <p>Axcepteur sint occaecat atat non proident, sunt in culpa qui officia deserunt mollit anim id est labor umLor em ipsum dolor amet, consteur adiscing Duis elentum solliciin is yaugue euismods Nulla ullaorper. Ipsum is simply dummy text of  printing and typeetting industry.</p>
                                <div class="blog-details-bottom">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-7">
                                            <div class="tg-post-tags">
                                                <h5 class="tags-title">tags :</h5>
                                                <ul class="list-wrap d-flex flex-wrap align-items-center m-0">
                                                    <li><a href="#">Esports</a>,</li>
                                                    <li><a href="#">Fantasy</a>,</li>
                                                    <li><a href="#">game</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-5">
                                            <div class="blog-post-share justify-content-start justify-content-md-end">
                                                <h5 class="share">share :</h5>
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__avatar-wrap mb-65">
                            <div class="blog__avatar-img">
                                <a href="#"><img src="assets/img/team/team02.png" alt="img"></a>
                            </div>
                            <div class="blog__avatar-info">
                                <span class="designation">Written by</span>
                                <h4 class="name"><a href="#">Ahmed Najeeb</a></h4>
                                <p>Axcepteur sint occaecat atat non proident, sunt culpa officia deserunt mollit anim id est labor umLor emdolor.</p>
                            </div>
                        </div>

                    </div>
                    <div class="blog-post-sidebar">
                        <aside class="blog-sidebar">


                            <div class="blog-widget widget_categories">
                                <h4 class="fw-title">CATEGORIES</h4>
                                <ul class="list-wrap">
                                    <li><a href="#">gaming</a><span class="float-right">(11)</span></li>
                                    <li><a href="#">ELECTRONIC</a><span class="float-right">(4)</span></li>
                                    <li><a href="#">online</a><span class="float-right">(21)</span></li>
                                    <li><a href="#">TOURNAMENT</a><span class="float-right">(15)</span></li>
                                    <li><a href="#">controller</a><span class="float-right">(2)</span></li>
                                    <li><a href="#">live</a><span class="float-right">(7)</span></li>
                                </ul>
                            </div>
                            <div class="blog-widget">
                                <h4 class="fw-title">Recent Posts</h4>
                                <div class="rc__post-wrapper">
                                    <div class="rc__post-item">
                                        <div class="rc__post-thumb">
                                            <a href="{{route('blog-details')}}"><img src="assets/img/blog/rc_post01.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc__post-content">
                                            <h6 class="title"><a href="{{route('blog-details')}}">zombie TOURNAMENT
                                                    land max</a></h6>
                                            <span class="date">aug 19, 2023</span>
                                        </div>
                                    </div>
                                    <div class="rc__post-item">
                                        <div class="rc__post-thumb">
                                            <a href="{{route('blog-details')}}"><img src="assets/img/blog/rc_post02.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc__post-content">
                                            <h6 class="title"><a href="{{route('blog-details')}}">play to earn crypto games</a></h6>
                                            <span class="date">aug 19, 2023</span>
                                        </div>
                                    </div>
                                    <div class="rc__post-item">
                                        <div class="rc__post-thumb">
                                            <a href="{{route('blog-details')}}"><img src="assets/img/blog/rc_post03.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc__post-content">
                                            <h6 class="title"><a href="{{route('blog-details')}}">nft games android
                                                    land max</a></h6>
                                            <span class="date">aug 19, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-widget">
                                <h4 class="fw-title">INSTAGRAM</h4>
                                <div class="sidebar__insta">
                                    <div class="sidebar__insta-item">
                                        <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/insta01.jpg" alt="img"></a>
                                    </div>
                                    <div class="sidebar__insta-item">
                                        <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/insta02.jpg" alt="img"></a>
                                    </div>
                                    <div class="sidebar__insta-item">
                                        <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/insta03.jpg" alt="img"></a>
                                    </div>
                                    <div class="sidebar__insta-item">
                                        <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/insta04.jpg" alt="img"></a>
                                    </div>
                                    <div class="sidebar__insta-item">
                                        <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/insta05.jpg" alt="img"></a>
                                    </div>
                                    <div class="sidebar__insta-item">
                                        <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/insta06.jpg" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h4 class="fw-title">Tag Cloud</h4>
                                <div class="tagcloud">
                                    <a href="#">E-sports</a>
                                    <a href="#">Fantasy</a>
                                    <a href="#">game</a>
                                    <a href="#">Tournaments</a>
                                    <a href="#">Matches</a>
                                    <a href="#">Streamers</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->

@endsection
