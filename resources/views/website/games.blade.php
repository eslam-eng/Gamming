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
                                <h2 class="title">Games</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Our Games</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
                            <div class="breadcrumb__img">
                                <img src="assets/img/others/breadcrumb_img02.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- trending-nft-area -->
        <section class="trendingNft-area section-pt-100 section-pb-90">
            <div class="container">

                <div class="row" style="justify-content: center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Race Condition</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('race')}}"><img src="assets/img/Game/race/1-second-size.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('race')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Kingdom Challenge</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('kingdom')}}"><img src="assets/img/Game/KINGDOM/1-second-size.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('kingdom')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Kooz</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('kooz')}}"><img src="assets/img/Game/kooz/1-second-size.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('kooz')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Letters Hero</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href={{route('letters')}}"><img src="assets/img/Game/letters_hero/1-scond-size.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('letters')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Hady Bady</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('hady')}}"><img src="assets/img/Game/hady_bady/1-second.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('hady')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">SRIP - Human Rights</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('srip')}}"><img src="assets/img/Game/strip/1-second-size.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('srip')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Frog Squash</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('frog')}}"><img src="assets/img/Game/frog/1-seconf.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('frog')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">The Passage</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('pass')}}"><img src="assets/img/Game/the_passage/1-second-size.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('pass')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Ithraa - King Abdulaziz Cultural Center</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('ithraa')}}"><img src="assets/img/Game/ithraa/1-second.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('ithraa')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Abjadiyat</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('abjadiyat')}}"><img src="assets/img/Game/abjadyat/1-second.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('abjadiyat')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Pharmlator</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('pharmlator')}}"><img src="assets/img/Game/phar/1-second-size.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('pharmlator')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                                <a href="{{route('secrets')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                                <a href="{{route('color')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                                <a href="{{route('impulse')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                                <a href="{{route('puppy')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                                <a href="{{route('skull')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="trendingNft__item">
                            <div class="trendingNft__item-top">
                                <div class="trendingNft__item-avatar">

                                    <div class="info">
                                        <h6 class="name">Beyti Bee</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="trendingNft__item-image">
                                <a href="{{route('beyti-bee')}}"><img src="assets/img/Game/Byte/Bg2.png" alt="img"></a>
                            </div>
                            <div class="trendingNft__item-bottom" style="display: block">
                                <a href="{{route('beyti-bee')}}" style="text-align: center; display: block" class="bid-btn"> More Information <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>




                </div>
                <!--
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
                -->
            </div>
        </section>
        <!-- trending-nft-end -->


    </main>
    <!-- main-area-end -->
@endsection
