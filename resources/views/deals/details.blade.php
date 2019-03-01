@extends('layouts.app')

@section('header')
<title> {{$deal[0]->name}} - {{env('APP_NAME')}}</title>
@endsection

@section('content')
<main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-content col-xs-12 col-sm-7 col-md-8">
                            <div class="row row-tb-20">
                                <div class="col-xs-12">
                                    <div class="deal-deatails panel">
                                        <div class="deal-slider">
                                            <div id="product_slider" class="flexslider">
                                                
                                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                                <ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                    <li class="flex-active-slide" style="width: 620px; float: left; display: block;">
                                                        <img alt="" src="{{asset('storage/app/public')}}/{{$deal[0]->image}}" draggable="false">
                                                    </li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="deal-body p-20">
                                            <h3 class="mb-10">{{$deal[0]->name}}</h3>
                                            <div class="rating mb-10">
                                                <span class="rating-stars" data-rating="3">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o star-active"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                            </div>
                                            <h2 class="price mb-15">Rs. {{$deal[0]->new_price}}</h2>
                                            {!!$deal[0]->desc!!}
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">
                            <!-- Blog Sidebar -->
                            <aside class="sidebar blog-sidebar">
                                <div class="row row-tb-10">
                                    <div class="col-xs-12">
                                        <div class="widget single-deal-widget panel ptb-30 prl-20">
                                            <div class="widget-body text-center">
                                                <h2 class="mb-20 h3">{{$deal[0]->name}}</h2>
                                                <ul class="deal-meta list-inline mb-10 color-mid">
                                                    <li><i class="ico fa fa-globe mr-10"></i><a href="url('./stores')" class="color-mid">Ebay</a>
                                                    </li>
                                                    <li><i class="ico fa fa-map-marker mr-10"></i>California</li>
                                                    <li><i class="ico fa fa-shopping-basket mr-10"></i>{{mt_rand(100,  454)}} Bought</li>
                                                </ul>
                                                
                                                <div class="price mb-20">
                                                    <h2 class="price"><span class="price-sale">Rs. {{$deal[0]->old_price}}</span> Rs. {{$deal[0]->new_price}}</h2>
                                                </div>
                                                <div class="buy-now mb-40">
                                                    <a href="{{$deal[0]->url}}" target="_blank" class="btn btn-block btn-lg">
                                                        <i class="fa fa-shopping-cart font-16 mr-10"></i> Buy now
                                                    </a>
                                                </div>
                                                <div class="time-left mb-30">
                                                    <p class="t-uppercase color-muted">
                                                        Hurry up Only a few deals left
                                                    </p>
                                                    <div class="color-mid font-14 font-lg-16">
            <i class="ico fa fa-clock-o mr-10"></i>
            <span data-countdown="{{date('Y/m/d', strtotime('tomorrow'))}} 23:59:59">84 Weeks 04 Days 23 : 46 : 11</span>
          </div>
                                                </div>
                                                <ul class="list-inline social-icons social-icons--colored t-center">
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                    <li class="social-icons__item">
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Recent Posts -->
                                        <div class="widget about-seller-widget panel ptb-30 prl-20">
                                            <h3 class="widget-title h-title">About Seller</h3>
                                            <div class="widget-body t-center">
                                                <figure class="mt-20 pb-10">
                                                    <img src="{{asset('storage/app/public')}}/{{$store->image}}" alt="{{$store->name}} Store">
                                                </figure>
                                                <div class="store-about mb-20">
                                                    <h3 class="mb-10">{{$store->name}} Store</h3>
                                                    <div class="rating mb-10">
                                                        <span class="rating-stars rate-allow" data-rating="3">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o star-active"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        <span class="rating-reviews">
                                                          ( <span class="rating-count">205</span> rates )
                                                        </span>
                                                    </div>
                                                    {!!$store->desc!!}
                                                   <a href="{{$store->url}}" target="_blank " class="btn btn-info">FOLLOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Recent Posts -->
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Subscribe Widget -->
                                        <div class="widget subscribe-widget panel pt-20 prl-20">
                                            <h3 class="widget-title h-title">Subscribe to mail</h3>
                                            <div class="widget-content ptb-30">

                                                <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                                <form method="post" action="#">
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" placeholder="Your Email Address" required="required">
                                                        <span class="input-group-btn">
                                                            <button class="btn" type="submit">Sign Up</button>
                                                        </span>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- End Subscribe Widget -->
                                    </div>
                                    
                                   
                                </div>
                            </aside>
                            <!-- End Blog Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Container -->


        </main>
@endsection