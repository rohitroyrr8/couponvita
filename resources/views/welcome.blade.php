@extends('layouts.app')

@section('header')
<title> Coupons, Deals, Discounts and Promo codes  - {{env('APP_NAME')}}</title>
@endsection
@section('content')
<main id="mainContent" class="main-content">
            <div class="page-container ptb-10">
                <div class="container">
                    <div class="section deals-header-area ptb-30">
                        <div class="row row-tb-20">
                            <div class="col-xs-12 col-md-4 col-lg-3">
                                <aside>
                                    <ul class="nav-coupon-category panel">
                                        <li><a href="#"><i class="fa fa-cutlery"></i>Food &amp; Drink<span>40</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-calendar"></i>Events<span>42</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-female"></i>Beauty<span>48</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bolt"></i>Fitness<span>33</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-image"></i>Furniture<span>50</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-umbrella"></i>Fashion<span>33</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping<span>37</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-home"></i>Home &amp; Graden<span>30</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-plane"></i>Travel<span>48</span></a>
                                        </li>
                                        <li class="all-cat">
                                            <a class="font-14" href="#">All Categories</a>
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-xs-12 col-md-8 col-lg-9">
                                <div class="header-deals-slider owl-slider owl-carousel owl-theme owl-loaded owl-responsive-992" data-loop="true" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="1000" data-nav-speed="false" data-nav="true" data-xxs-items="1" data-xxs-nav="true" data-xs-items="1" data-xs-nav="true" data-sm-items="1" data-sm-nav="true" data-md-items="1" data-md-nav="true" data-lg-items="1" data-lg-nav="true">

                                    
                                    
                                    

                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1234px, 0px, 0px); transition: all 0s ease 0s; width: 4319px;"><div class="owl-item cloned" style="width: 617px; margin-right: 0px;"><div class="deal-single panel item">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_02.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_02.jpg')}}&quot;);">
                                            <div class="label-discount top-10 right-10">-30%</div>
                                            <ul class="deal-actions top-10 left-10">
                                                <li class="like-deal">
                                                    <span>
                                    <i class="fa fa-heart"></i>
                                </span>
                                                </li>
                                                <li class="share-btn">
                                                    <div class="share-tooltip fade">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                </li>
                                                <li>
                                                    <span>
                                    <i class="fa fa-camera"></i>
                                </span>
                                                </li>
                                            </ul>
                                            <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars" data-rating="5">
                                    <i class="fa fa-star-o star-active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span><span class="rating-reviews color-light">
                                    ( <span class="rating-count">132</span> Reviews )
                                                    </span>
                                                </div>
                                                <h3 class="deal-title mb-10 ">
                                <a href="deal_single.html" class="color-light color-h-lighter">Western Digital USB 3.0 Hard Drives</a>
                            </h3>
                                            </div>
                                        </figure>
                                    </div></div><div class="owl-item cloned" style="width: 617px; margin-right: 0px;"><div class="deal-single panel item">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_03.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_03.jpg')}}&quot;);">
                                            <div class="label-discount top-10 right-10">-30%</div>
                                            <ul class="deal-actions top-10 left-10">
                                                <li class="like-deal">
                                                    <span>
                                    <i class="fa fa-heart"></i>
                                </span>
                                                </li>
                                                <li class="share-btn">
                                                    <div class="share-tooltip fade">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                </li>
                                                <li>
                                                    <span>
                                    <i class="fa fa-camera"></i>
                                </span>
                                                </li>
                                            </ul>
                                            <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars" data-rating="5">
                                    <i class="fa fa-star-o star-active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                                    <span class="rating-reviews color-light">
                                    ( <span class="rating-count">160</span> Reviews )
                                                    </span>
                                                </div>
                                                <h3 class="deal-title mb-10 ">
                                <a href="deal_single.html" class="color-light color-h-lighter">Hampton Bay LED Light Ceiling Exhaust Fan</a>
                            </h3>
                                            </div>
                                        </figure>
                                    </div></div><div class="owl-item active" style="width: 617px; margin-right: 0px;"><div class="deal-single panel item">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_01.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_01.jpg')}}&quot;);">
                                            <div class="label-discount top-10 right-10">-50%</div>
                                            <ul class="deal-actions top-10 left-10">
                                                <li class="like-deal">
                                                    <span>
                                    <i class="fa fa-heart"></i>
                                </span>
                                                </li>
                                                <li class="share-btn">
                                                    <div class="share-tooltip fade">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                </li>
                                                <li>
                                                    <span>
                                    <i class="fa fa-camera"></i>
                                </span>
                                                </li>
                                            </ul>
                                            <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars" data-rating="5">
                                    <i class="fa fa-star-o star-active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                                    <span class="rating-reviews color-light">
                                    ( <span class="rating-count">241</span> Reviews )
                                                    </span>
                                                </div>
                                                <h3 class="deal-title mb-10 ">
                                <a href="deal_single.html" class="color-light color-h-lighter">The Crash Bad Instant Folding Twin Bed</a>
                            </h3>
                                            </div>
                                        </figure>
                                    </div></div><div class="owl-item" style="width: 617px; margin-right: 0px;"><div class="deal-single panel item">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_02.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_02.jpg')}}&quot;);">
                                            <div class="label-discount top-10 right-10">-30%</div>
                                            <ul class="deal-actions top-10 left-10">
                                                <li class="like-deal">
                                                    <span>
                                    <i class="fa fa-heart"></i>
                                </span>
                                                </li>
                                                <li class="share-btn">
                                                    <div class="share-tooltip fade">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                </li>
                                                <li>
                                                    <span>
                                    <i class="fa fa-camera"></i>
                                </span>
                                                </li>
                                            </ul>
                                            <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars" data-rating="5">
                                    <i class="fa fa-star-o star-active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                                    <span class="rating-reviews color-light">
                                    ( <span class="rating-count">132</span> Reviews )
                                                    </span>
                                                </div>
                                                <h3 class="deal-title mb-10 ">
                                <a href="deal_single.html" class="color-light color-h-lighter">Western Digital USB 3.0 Hard Drives</a>
                            </h3>
                                            </div>
                                        </figure>
                                    </div></div><div class="owl-item" style="width: 617px; margin-right: 0px;"><div class="deal-single panel item">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_03.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_03.jpg')}}&quot;);">
                                            <div class="label-discount top-10 right-10">-30%</div>
                                            <ul class="deal-actions top-10 left-10">
                                                <li class="like-deal">
                                                    <span>
                                    <i class="fa fa-heart"></i>
                                </span>
                                                </li>
                                                <li class="share-btn">
                                                    <div class="share-tooltip fade">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                </li>
                                                <li>
                                                    <span>
                                    <i class="fa fa-camera"></i>
                                </span>
                                                </li>
                                            </ul>
                                            <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars" data-rating="5">
                                    <i class="fa fa-star-o star-active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                                    <span class="rating-reviews color-light">
                                    ( <span class="rating-count">160</span> Reviews )
                                                    </span>
                                                </div>
                                                <h3 class="deal-title mb-10 ">
                                <a href="deal_single.html" class="color-light color-h-lighter">Hampton Bay LED Light Ceiling Exhaust Fan</a>
                            </h3>
                                            </div>
                                        </figure>
                                    </div></div><div class="owl-item cloned" style="width: 617px; margin-right: 0px;"><div class="deal-single panel item">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_01.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_01.jpg')}}&quot;);">
                                            <div class="label-discount top-10 right-10">-50%</div>
                                            <ul class="deal-actions top-10 left-10">
                                                <li class="like-deal">
                                                    <span>
                                    <i class="fa fa-heart"></i>
                                </span>
                                                </li>
                                                <li class="share-btn">
                                                    <div class="share-tooltip fade">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                </li>
                                                <li>
                                                    <span>
                                    <i class="fa fa-camera"></i>
                                </span>
                                                </li>
                                            </ul>
                                            <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars" data-rating="5">
                                    <i class="fa fa-star-o star-active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                                    <span class="rating-reviews color-light">
                                    ( <span class="rating-count">241</span> Reviews )
                                                    </span>
                                                </div>
                                                <h3 class="deal-title mb-10 ">
                                <a href="deal_single.html" class="color-light color-h-lighter">The Crash Bad Instant Folding Twin Bed</a>
                            </h3>
                                            </div>
                                        </figure>
                                    </div></div><div class="owl-item cloned" style="width: 617px; margin-right: 0px;"><div class="deal-single panel item">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_02.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_02.jpg')}}&quot;);">
                                            <div class="label-discount top-10 right-10">-30%</div>
                                            <ul class="deal-actions top-10 left-10">
                                                <li class="like-deal">
                                                    <span>
                                    <i class="fa fa-heart"></i>
                                </span>
                                                </li>
                                                <li class="share-btn">
                                                    <div class="share-tooltip fade">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                </li>
                                                <li>
                                                    <span>
                                    <i class="fa fa-camera"></i>
                                </span>
                                                </li>
                                            </ul>
                                            <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars" data-rating="5">
                                    <i class="fa fa-star-o star-active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                                    <span class="rating-reviews color-light">
                                    ( <span class="rating-count">132</span> Reviews )
                                                    </span>
                                                </div>
                                                <h3 class="deal-title mb-10 ">
                                <a href="deal_single.html" class="color-light color-h-lighter">Western Digital USB 3.0 Hard Drives</a>
                            </h3>
                                            </div>
                                        </figure>
                                    </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-angle-left" aria-hidden="true"></i></div><div class="owl-next" style=""><i class="fa fa-angle-right" aria-hidden="true"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="section explain-process-area ptb-30">
                        <div class="row row-rl-10">
                            <div class="col-md-4">
                                <div class="item panel prl-15 ptb-20">
                                    <div class="row row-rl-5 row-xs-cell">
                                        <div class="col-xs-4 valign-middle">
                                            <img class="pr-10" src="{{asset('images/icons/tablet.png')}}" alt="">
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="mb-10 pt-5">Deals &amp; Coupons</h5>
                                            <p class="color-mid">Get the best deals for you and around you at no cost</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item panel prl-15 ptb-20">
                                    <div class="row row-rl-5 row-xs-cell">
                                        <div class="col-xs-4 valign-middle">
                                            <img class="pr-10" src="{{asset('images/icons/online-shop-6.png')}}" alt="">
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="mb-10 pt-5">Find Best Offers</h5>
                                            <p class="color-mid">Find the best offers for you on your favorite e-stores</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item panel prl-15 ptb-20">
                                    <div class="row row-rl-5 row-xs-cell">
                                        <div class="col-xs-4 valign-middle">
                                            <img class="pr-10" src="{{asset('images/icons/money.png')}}" alt="">
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="mb-10 pt-5">Save Money</h5>
                                            <p class="color-mid">Click through our link and shop to save money</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="section latest-deals-area ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest Deals</h3>
                            <a class="btn btn-o btn-xs pos-a right-10 pos-tb-center" href="{{url('./deals')}}">View All</a>
                        </header>

                        <div class="row row-masnory row-tb-20">
                            <div class="col-sm-6 col-lg-4">
                                <div class="deal-single panel">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_01.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_01.jpg')}}&quot;);">
                                        <div class="label-discount left-20 top-15">-50%</div>
                                        <ul class="deal-actions top-15 right-20">
                                            <li class="like-deal">
                                                <span>
                                <i class="fa fa-heart"></i>
                            </span>
                                            </li>
                                            <li class="share-btn">
                                                <div class="share-tooltip fade">
                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                                <span><i class="fa fa-share-alt"></i></span>
                                            </li>
                                            <li>
                                                <span>
                                <i class="fa fa-camera"></i>
                            </span>
                                            </li>
                                        </ul>
                                        <div class="time-left bottom-15 right-20 font-md-14">
                                            <span>
                            <i class="ico fa fa-clock-o mr-10"></i>
                            <span class="t-uppercase" data-countdown="2019/09/01 01:30:00">26 Weeks 05 Days 14 : 29 : 09</span>
                        </span>
                                        </div>
                                        <div class="deal-store-logo">
                                            <img src="{{asset('images/brands/brand_01.jpg')}}" alt="">
                                        </div>
                                    </figure>
                                    <div class="bg-white pt-20 pl-20 pr-15">
                                        <div class="pr-md-10">
                                            <div class="rating mb-10">
                                                <span class="rating-stars rate-allow" data-rating="5">
                                <i class="fa fa-star-o star-active"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                                                <span class="rating-reviews">
                                ( <span class="rating-count">241</span> rates )
                                                </span>
                                            </div>
                                            <h3 class="deal-title mb-10">
                            <a href="deal_single.html">The Crash Bad Instant Folding Twin Bed</a>
                        </h3>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-map-marker mr-10"></i>United State</li>
                                                <li><i class="ico fa fa-shopping-basket mr-10"></i>120 Bought</li>
                                            </ul>
                                            <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                        </div>
                                        <div class="deal-price pos-r mb-15">
                                            <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="deal-single panel">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_02.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_02.jpg')}}&quot;);">
                                        <div class="label-discount left-20 top-15">-30%</div>
                                        <ul class="deal-actions top-15 right-20">
                                            <li class="like-deal">
                                                <span>
                                <i class="fa fa-heart"></i>
                            </span>
                                            </li>
                                            <li class="share-btn">
                                                <div class="share-tooltip fade">
                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                                <span><i class="fa fa-share-alt"></i></span>
                                            </li>
                                            <li>
                                                <span>
                                <i class="fa fa-camera"></i>
                            </span>
                                            </li>
                                        </ul>
                                        <div class="time-left bottom-15 right-20 font-md-14">
                                            <span>
                            <i class="ico fa fa-clock-o mr-10"></i>
                            <span class="t-uppercase" data-countdown="2020/10/10 12:25:10">84 Weeks 05 Days 01 : 24 : 19</span>
                        </span>
                                        </div>
                                        <div class="deal-store-logo">
                                            <img src="{{asset('images/brands/brand_02.jpg')}}" alt="">
                                        </div>
                                    </figure>
                                    <div class="bg-white pt-20 pl-20 pr-15">
                                        <div class="pr-md-10">
                                            <div class="rating mb-10">
                                                <span class="rating-stars rate-allow" data-rating="3">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o star-active"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                                                <span class="rating-reviews">
                                ( <span class="rating-count">132</span> rates )
                                                </span>
                                            </div>
                                            <h3 class="deal-title mb-10">
                            <a href="deal_single.html">Western Digital USB 3.0 Hard Drives</a>
                        </h3>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
                                                <li><i class="ico fa fa-shopping-basket mr-10"></i>42 Bought</li>
                                            </ul>
                                            <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                        </div>
                                        <div class="deal-price pos-r mb-15">
                                            <h3 class="price ptb-5 text-right"><span class="price-sale">$150.00</span>$100.00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="deal-single panel">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_03.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_03.jpg')}}&quot;);">
                                        <div class="label-discount left-20 top-15">-30%</div>
                                        <ul class="deal-actions top-15 right-20">
                                            <li class="like-deal">
                                                <span>
                                <i class="fa fa-heart"></i>
                            </span>
                                            </li>
                                            <li class="share-btn">
                                                <div class="share-tooltip fade">
                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                                <span><i class="fa fa-share-alt"></i></span>
                                            </li>
                                            <li>
                                                <span>
                                <i class="fa fa-camera"></i>
                            </span>
                                            </li>
                                        </ul>
                                        <div class="time-left bottom-15 right-20 font-md-14">
                                            <span>
                            <i class="ico fa fa-clock-o mr-10"></i>
                            <span class="t-uppercase" data-countdown="2020/10/10 12:25:10">84 Weeks 05 Days 01 : 24 : 19</span>
                        </span>
                                        </div>
                                        <div class="deal-store-logo">
                                            <img src="{{asset('images/brands/brand_03.jpg')}}" alt="">
                                        </div>
                                    </figure>
                                    <div class="bg-white pt-20 pl-20 pr-15">
                                        <div class="pr-md-10">
                                            <div class="rating mb-10">
                                                <span class="rating-stars rate-allow" data-rating="4">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o star-active"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                                                <span class="rating-reviews">
                                ( <span class="rating-count">160</span> rates )
                                                </span>
                                            </div>
                                            <h3 class="deal-title mb-10">
                            <a href="deal_single.html">Hampton Bay LED Light Ceiling Exhaust Fan</a>
                        </h3>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-map-marker mr-10"></i>Australia</li>
                                                <li><i class="ico fa fa-shopping-basket mr-10"></i>75 Bought</li>
                                            </ul>
                                            <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                        </div>
                                        <div class="deal-price pos-r mb-15">
                                            <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$150.00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="deal-single panel">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_04.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_04.jpg')}}&quot;);">
                                        <div class="label-discount left-20 top-15">-15%</div>
                                        <ul class="deal-actions top-15 right-20">
                                            <li class="like-deal">
                                                <span>
                                <i class="fa fa-heart"></i>
                            </span>
                                            </li>
                                            <li class="share-btn">
                                                <div class="share-tooltip fade">
                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                                <span><i class="fa fa-share-alt"></i></span>
                                            </li>
                                            <li>
                                                <span>
                                <i class="fa fa-camera"></i>
                            </span>
                                            </li>
                                        </ul>
                                        <div class="time-left bottom-15 right-20 font-md-14">
                                            <span>
                            <i class="ico fa fa-clock-o mr-10"></i>
                            <span class="t-uppercase disabled" data-countdown="2018/01/02 10:35:23">This offer ha expired!</span>
                        </span>
                                        </div>
                                        <div class="deal-store-logo">
                                            <img src="{{asset('images/brands/brand_04.jpg')}}" alt="">
                                        </div>
                                    </figure>
                                    <div class="bg-white pt-20 pl-20 pr-15">
                                        <div class="pr-md-10">
                                            <div class="rating mb-10">
                                                <span class="rating-stars rate-allow" data-rating="2">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o star-active"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                                                <span class="rating-reviews">
                                ( <span class="rating-count">100</span> rates )
                                                </span>
                                            </div>
                                            <h3 class="deal-title mb-10">
                            <a href="deal_single.html">Timberland Men's Thorton Waterproof Boots</a>
                        </h3>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-map-marker mr-10"></i>Canada</li>
                                                <li><i class="ico fa fa-shopping-basket mr-10"></i>10 Bought</li>
                                            </ul>
                                            <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                        </div>
                                        <div class="deal-price pos-r mb-15">
                                            <h3 class="price ptb-5 text-right"><span class="price-sale">$380.00</span>$340.00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="deal-single panel">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_05.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_05.jpg')}}&quot;);">
                                        <div class="label-discount left-20 top-15">-60%</div>
                                        <ul class="deal-actions top-15 right-20">
                                            <li class="like-deal">
                                                <span>
                                <i class="fa fa-heart"></i>
                            </span>
                                            </li>
                                            <li class="share-btn">
                                                <div class="share-tooltip fade">
                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                                <span><i class="fa fa-share-alt"></i></span>
                                            </li>
                                            <li>
                                                <span>
                                <i class="fa fa-camera"></i>
                            </span>
                                            </li>
                                        </ul>
                                        <div class="time-left bottom-15 right-20 font-md-14">
                                            <span>
                            <i class="ico fa fa-clock-o mr-10"></i>
                            <span class="t-uppercase" data-countdown="2021/12/03 03:15:00">144 Weeks 03 Days 16 : 14 : 09</span>
                        </span>
                                        </div>
                                        <div class="deal-store-logo">
                                            <img src="{{asset('images/brands/brand_05.jpg')}}" alt="">
                                        </div>
                                    </figure>
                                    <div class="bg-white pt-20 pl-20 pr-15">
                                        <div class="pr-md-10">
                                            <div class="rating mb-10">
                                                <span class="rating-stars rate-allow" data-rating="3">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o star-active"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                                                <span class="rating-reviews">
                                ( <span class="rating-count">32</span> rates )
                                                </span>
                                            </div>
                                            <h3 class="deal-title mb-10">
                            <a href="deal_single.html">New and Refurbished Lenovo Laptops</a>
                        </h3>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-map-marker mr-10"></i>United State</li>
                                                <li><i class="ico fa fa-shopping-basket mr-10"></i>65 Bought</li>
                                            </ul>
                                            <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                        </div>
                                        <div class="deal-price pos-r mb-15">
                                            <h3 class="price ptb-5 text-right"><span class="price-sale">$700.00</span>$576.00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="deal-single panel">
                                    <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('images/deals/deal_06.jpg')}}" style="background-image: url(&quot;{{asset('images/deals/deal_06.jpg')}}&quot;);">
                                        <div class="label-discount left-20 top-15">-60%</div>
                                        <ul class="deal-actions top-15 right-20">
                                            <li class="like-deal">
                                                <span>
                                <i class="fa fa-heart"></i>
                            </span>
                                            </li>
                                            <li class="share-btn">
                                                <div class="share-tooltip fade">
                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                </div>
                                                <span><i class="fa fa-share-alt"></i></span>
                                            </li>
                                            <li>
                                                <span>
                                <i class="fa fa-camera"></i>
                            </span>
                                            </li>
                                        </ul>
                                        <div class="time-left bottom-15 right-20 font-md-14">
                                            <span>
                            <i class="ico fa fa-clock-o mr-10"></i>
                            <span class="t-uppercase" data-countdown="2019/10/10 12:00:00">32 Weeks 03 Days 00 : 59 : 09</span>
                        </span>
                                        </div>
                                        <div class="deal-store-logo">
                                            <img src="{{asset('images/brands/brand_06.jpg')}}" alt="">
                                        </div>
                                    </figure>
                                    <div class="bg-white pt-20 pl-20 pr-15">
                                        <div class="pr-md-10">
                                            <div class="rating mb-10">
                                                <span class="rating-stars rate-allow" data-rating="5">
                                <i class="fa fa-star-o star-active"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                                                <span class="rating-reviews">
                                ( <span class="rating-count">29</span> rates )
                                                </span>
                                            </div>
                                            <h3 class="deal-title mb-10">
                            <a href="deal_single.html">Buying a TV Is Easy When You Know These Terms</a>
                        </h3>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-map-marker mr-10"></i>United Kingdom</li>
                                                <li><i class="ico fa fa-shopping-basket mr-10"></i>134 Bought</li>
                                            </ul>
                                            <p class="text-muted mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam numquam nostrum.</p>
                                        </div>
                                        <div class="deal-price pos-r mb-15">
                                            <h3 class="price ptb-5 text-right"><span class="price-sale">$300.00</span>$250.00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="section latest-coupons-area ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest Coupons </h3>
                            <a href="{{url('./coupons')}}" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                        </header>

                        <div class="latest-coupons-slider owl-slider owl-carousel owl-theme owl-loaded owl-responsive-992" data-autoplay-hover-pause="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="30" data-nav-speed="false" data-items="1" data-xxs-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4">
                            
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1940px, 0px, 0px); transition: all 0s ease 0s; width: 3880px;">
                                @if($coupons->count() > 0)
                                @foreach($coupons as $coupon)
                                <div class="owl-item cloned" style="width: 293.333px; margin-right: 30px;">
                                    <div class="coupon-item">
                                    <div class="coupon-single panel t-center">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="text-center p-20">
                                                    <img class="store-logo" src="{{asset('storage/app/public')}}/{{$coupon->image}}" alt="" style="height: 150px; width: 225px">
                                                </div>
                                                <!-- end media -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xs-12">
                                                <div class="panel-body">
                                                    <ul class="deal-meta list-inline mb-10">
                                                        <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>{{mt_rand(0, 400)}} Used</li>
                                                    </ul>
                                                    <h5 class="deal-title mb-10">
                                                    {{substr($coupon->name, 0, 25)}}
                                                    </h5>
                                                    <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On 02/03/2018</p>
                                                        <div class="showcode" data-toggle-class="coupon-showen" data-toggle-event="click">
                                                        <a href="{{$coupon->url}}" target="_blank" class="show-code btn btn-sm btn-block" >Print Code</a>
                                                        <div class="coupon-hide">X455-17GT-OL58</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <h3>Nothing Found...</h3>
                                @endif
                            </div>
                        </div>
                        <div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="fa fa-angle-left" aria-hidden="true"></i></div><div class="owl-next" style="display: none;"><i class="fa fa-angle-right" aria-hidden="true"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                    </section>
                    <section class="section stores-area stores-area-v1 ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Popular Stores</h3>
                            <a href="{{url('./stores')}}" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">All Stores</a>
                        </header>
                        <div class="popular-stores-slider owl-slider owl-carousel owl-theme owl-loaded owl-responsive-992" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">
                          <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1728px, 0px, 0px); transition: all 0s ease 0s; width: 3456px;">
                            @if($stores->count() > 0)
                            @foreach($stores as $store)
                            <div class="owl-item cloned" style="width: 172px; margin-right: 20px;">
                                <div class="store-item t-center">
                                    <a href="{{url('./store')}}/{{$store->slug}}" class="panel is-block">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <div class="store-logo">
                                                <img src="{{asset('/storage/app/public')}}/{{$store->image}}" alt="{{$store->name}} logo">
                                            </div>
                                        </div>
                                        <h6 class="store-name ptb-10">{{$store->name}}</h6>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h3>Nothing Found...</h3>
                            @endif
                            </div>
                        </div>
                        <div class="owl-controls">
                            <div class="owl-nav">
                                <div class="owl-prev" style="display: none;">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div class="owl-next" style="display: none;">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="owl-dots" style="display: none;"></div>
                        </div>
                    </div>
                    </section>


                    <section class="section latest-news-area blog-area blog-grid blog-3-col ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest News</h3>
                            <a href="{{url('./blog')}}" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">Visit Blog</a>
                        </header>

                        <div class="row row-tb-20">

                            @if($posts->count() > 0)
                            @foreach($posts as $post)
                            <div class="blog-post col-xs-12 col-sm-6 col-md-4">
                                <article class="entry panel">
                                    <figure class="entry-media embed-responsive embed-responsive-16by9">
                                        <img src="{{asset('storage/app/public')}}/{{$post->image}}">
                                        <div class="entry-date">
                                            <h4>{{date('d', strtotime($post->updated_at))}}</h4>
                                            <h6>{{date('M', strtotime($post->updated_at))}}</h6>
                                        </div>
                                    </figure>
                                    <div class="entry-wrapper pt-20 pb-10 prl-20">
                                        <header class="entry-header">
                                            <h4 class="entry-title mb-10 mb-md-15 font-xs-16 font-sm-18 font-md-16 font-lg-16">
                                                <a href="{{url('./blog')}}/{{$post->slug}}">{{substr($post->title, 0, 25)}}</a>
                                            </h4>
                                            <div class="entry-meta mb-10">
                                                <ul class="tag-info list-inline">
                                                    <li><i class="icon fa fa-user"></i> By : {{env('APP_NAME')}} User</li>
                                                    
                                                </ul>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p class="entry-summary">{!!substr($post->body, 0, 150)!!}...</p>
                                        </div>
                                        <footer class="entry-footer text-right">
                                            <a href="{{url('./blog')}}/{{$post->slug}}" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                            <!-- End Blog Post -->
                            @endforeach
                            @else
                            <h3>Nothing Found...</h3>
                            @endif
                            

                        </div>
                    </section>


                    @include('includes.subscribe')
                </div>
            </div>


        </main>
@endsection