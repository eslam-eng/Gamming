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
                                <h2 class="title">Beyti Bee</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Games</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-area -->
        <section class="shop-area shop-details-area">
            <div class="container">
                <div class="row">
                    <div class="shop__details-images-wrap">
                        <ul class="nav nav-tabs" id="imageTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="one-tab" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab" aria-controls="one" aria-selected="true">
                                    <img src="assets/img/Game/Byte/1.png" alt="img">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two" aria-selected="false">
                                    <img src="assets/img/Game/Byte/2.png" alt="img">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab" aria-controls="two" aria-selected="false">
                                    <img src="assets/img/Game/Byte/3.png" alt="img">
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#four" type="button" role="tab" aria-controls="two" aria-selected="false">
                                    <img src="assets/img/Game/Byte/4.png" alt="img">
                                </button>
                            </li>

                        </ul>
                        <div class="tab-content" id="imageTabContent">
                            <div class="tab-pane show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                                <a href="assets/img/Game/Byte/1.png" class="popup-image"><img src="assets/img/Game/Byte/1.png" alt="img"></a>
                            </div>
                            <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab">
                                <a href="assets/img/Game/Byte/2.png" class="popup-image"><img src="assets/img/Game/Byte/2.png" alt="img"></a>
                            </div>
                            <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="two-tab">
                                <a href="assets/img/Game/Byte/3.png" class="popup-image"><img src="assets/img/Game/Byte/3.png" alt="img"></a>
                            </div>
                            <div class="tab-pane" id="four" role="tabpanel" aria-labelledby="two-tab">
                                <a href="assets/img/Game/Byte/4.png" class="popup-image"><img src="assets/img/Game/Byte/4.png" alt="img"></a>
                            </div>

                        </div>
                    </div>
                    <div class="shop__details-content">
                        <div class="shop__details-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h2 class="title">Beyti Bee</h2>
                        <!--
                                                <div class="shop__details-price">
                                                    <span class="amount">$25.45 <span class="stock-status">- IN STOCK</span></span>
                                                </div>
                        -->
                        <div class="shop__details-short-description">
                            <p>Match 3 shooter game for Beyti Juice</p>
                        </div>
                        <!--
                                                <div class="shop__details-model d-flex align-items-center">
                                                    <p class="model m-0">Model:</p>
                                                    <ul class="list-wrap d-flex align-items-center">
                                                        <li class="active">Gat</li>
                                                        <li>dat4</li>
                                                        <li>rt30</li>
                                                    </ul>
                                                </div>
                        -->
                        <div class="shop__details-qty">
                            <div class="cart-plus-minus d-flex flex-wrap align-items-center">
                                <!--
                                                                <form action="#" class="quantity num-block">
                                                                    <input type="text" class="in-num" value="1" readonly="">
                                                                    <div class="qtybutton-box">
                                                                        <span class="plus"><i class="fas fa-angle-up"></i></span>
                                                                        <span class="minus dis"><i class="fas fa-angle-down"></i></span>
                                                                    </div>
                                                                </form>
                                -->
                                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.Beyti.BeytiBee" class="shop__details-cart-btn"><img src="assets/img/playstore.png">Play Store</a>
                                <!--                                <a target="_blank" href="https://apps.apple.com/us/app/impulse-brain-bending/id1075880285" class="shop__details-cart-btn"><img src="assets/img/safari.png">Safari App</a>-->
                                <!--                                <a target="_blank" href="https://store.steampowered.com/app/1423480/Secrets_of_a_Campfire/" class="shop__details-cart-btn"><img src="assets/img/application.png">Windows App</a>-->
                            </div>
                        </div>
                        <div class="shop__details-bottom">
                            <!--
                                                        <div class="posted_in">
                                                            <b>Categories :</b>
                                                            <a href="shop.html">Gamdias,</a>
                                                            <a href="shop.html">Apple,</a>
                                                            <a href="shop.html">Huawei</a>
                                                        </div>
                                                        <div class="tagged_as">
                                                            <b>Tags :</b>
                                                            <a href="shop.html">Silver,</a>
                                                            <a href="shop.html">Pink,</a>
                                                            <a href="shop.html">Green</a>
                                                        </div>
                            -->
                            <div class="product_share">
                                <b>Share :</b>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- shop-area-end -->


        <!--
                <div class="GameVideo">
                    <div class="container">
                        <div class="row" style="justify-content: center">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="videoBox">
                                    <video controls>
                                        <source src="assets/Videos/Impulse.mp4">
                                    </video>
                                    <iframe  src="https://www.youtube.com/embed/ayTr0jHjnLw?si=52jNnV4a9Fcyn30w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        -->

    </main>
    <!-- main-area-end -->
@endsection
