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
                                <h2 class="title">Our blog</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">blog</li>
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
        <section class="blog-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="blog-post-wrapper">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="{{route('blog-details')}}"><img src="assets/img/blog/blog_post01.jpg" alt="img"></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li>By<a href="#">Admin</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Aug 19, 2023</li>

                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{route('blog-details')}}">zombie land TOURNAMENT max</a></h2>
                                <p>Lorem ipsum dolor sit amet, consteur adipiscing Duis elementum solliciin is yaugue euismods Nulla ullaorper. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                <div class="blog-post-bottom">
                                    <div class="blog-post-read">
                                        <a href="{{route('blog-details')}}">READ MORE <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blog-post-share">
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
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="{{route('blog-details')}}"><img src="assets/img/blog/blog_post02.jpg" alt="img"></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li>By<a href="#">Admin</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Aug 16, 2023</li>

                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{route('blog-details')}}">play to earn crypto games place</a></h2>
                                <p>Lorem ipsum dolor sit amet, consteur adipiscing Duis elementum solliciin is yaugue euismods Nulla ullaorper. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                <div class="blog-post-bottom">
                                    <div class="blog-post-read">
                                        <a href="{{route('blog-details')}}">READ MORE <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blog-post-share">
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
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="{{route('blog-details')}}"><img src="assets/img/blog/blog_post03.jpg" alt="img"></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li>By<a href="#">Admin</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Aug 16, 2023</li>

                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{route('blog-details')}}">nft games android no investment</a></h2>
                                <p>Lorem ipsum dolor sit amet, consteur adipiscing Duis elementum solliciin is yaugue euismods Nulla ullaorper. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                <div class="blog-post-bottom">
                                    <div class="blog-post-read">
                                        <a href="{{route('blog-details')}}">READ MORE <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                    <div class="blog-post-share">
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
                        <div class="pagination__wrap">
                            <ul class="list-wrap d-flex flex-wrap justify-content-center">
                                <li><a href="#" class="page-numbers">01</a></li>
                                <li><span class="page-numbers current">02</span></li>
                                <li><a href="#" class="page-numbers">03</a></li>
                                <li><a href="#" class="page-numbers">04</a></li>
                                <li><a href="#" class="page-numbers">....</a></li>
                                <li>
                                    <a href="#" class="next page-numbers">
                                        <i class="fas fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-post-sidebar">
                        <aside class="blog-sidebar">
                            <div class="blog-widget">
                                <div class="sidebar__author">
                                    <div class="sidebar__author-thumb">
                                        <img src="assets/img/blog/avatar.jpg" alt="img">
                                    </div>
                                    <div class="sidebar__author-content">
                                        <h4 class="name">Kaceytron G.</h4>
                                        <p>Lorem ipsum sitamet conteur adipiscing Duis elementum solliciin</p>
                                        <div class="sidebar__author-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <form class="sidebar-search-form position-relative">
                                    <input type="text" placeholder="Search here..">
                                    <button><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>
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
