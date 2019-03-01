@extends('layouts.app')

@section('header')
<title>{{$store[0]->name}} Store - {{env('APP_NAME')}}</title>
@endsection

@section('content')
<main id="mainContent" class="main-content">
    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-10 row-tb-20">
                <div class="page-sidebar col-sm-4 col-md-3">
                    <aside class="store-header-area panel t-center">
                        <div class="row">
                            <div class="col-xs-12">
                                <figure class="pt-10 pl-10">
                                    <img src="{{asset('storage/app/public')}}/{{$store[0]->image}}" alt="">
                                </figure>
                            </div>
                            <div class="col-xs-12">
                                <div class="store-about ptb-30 prl-10">
                                    <h3 class="mb-10">{{$store[0]->name}} Store</h3>
                                    <div class="rating mb-10">
                                        <span class="rating-stars rate-allow" data-rating="3">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o star-active"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                        <span class="rating-reviews">
                                        ( <span class="rating-count">{{mt_rand(100, 500)}}</span> rates )
                                        </span>
                                    </div>
                                    <p class="mb-15">{!!$store[0]->desc!!}</p>
                                    <a href="{{$store[0]->url}}" target="_blank" class="btn btn-info">Go to Offical Website</a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="store-splitter-left">
                                    <header class="left-splitter-header prl-10 ptb-20 bg-lighter">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <h2>{{$coupons->count()}}</h2>
                                                <p>Coupons</p>
                                            </div>
                                            <div class="col-xs-6">
                                                <h2>122</h2>
                                                <p>Deals</p>
                                            </div>
                                        </div>
                                    </header>
                                    <footer class="left-splitter-social prl-20 ptb-20">
                                        <ul class="list-inline social-icons social-icons--colored t-center">
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="page-content col-sm-8 col-md-9">

                    <!-- Store Tabs Area -->
                    <div class="section store-tabs-area">
                        <div class="tabs tabs-v1">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs panel" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#coupons" aria-controls="coupons" role="tab" data-toggle="tab" aria-expanded="true" style="    font-size: 17px;"><i class="fa fa-ticket mr-10" style="font-size: 27px;"></i>Coupons</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#deals" aria-controls="coupons" role="tab" data-toggle="tab" aria-expanded="true" style="    font-size: 17px;"><i class="fa fa-gift mr-10" style="font-size: 27px;"></i>Deals</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane ptb-20 active" id="coupons">
                                    <section class="section coupons-area coupons-area-grid">
                                        <div class="row row-masnory row-tb-20">
                                            @if($coupons->count() > 0)
                                            @foreach($coupons as $coupon)
                                            <div class="col-sm-6">
                                                <div class="coupon-single panel t-center">
                                                @if($coupon->featured)
                                                    <div class="ribbon-wrapper is-hidden-xs-down">
                                                        <div class="ribbon">Featured</div>
                                                    </div>
                                                @endif
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="text-center p-20">
                                                            <img class="store-logo" src="{{asset('storage/app/public')}}/{{$coupon->image}}" alt="">
                                                        </div>
                                                        <!-- end media -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="col-xs-12">
                                                        <div class="panel-body">
                                                            <ul class="deal-meta list-inline mb-10">
                                                                <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                                <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>{{mt_rand(100, 540)}} Used</li>
                                                            </ul>
                                                            
                                                            <h4 class="deal-title mb-10">
                                                                <a href="{{$coupon->url}}">{{$coupon->name}}</a>
                                                            </h4>
                                                            <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On {{date('d F, Y', strtotime('tomorrow'))}}</p>
                                                            <div class="showcode">
                                                                <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_{{$coupon->id}}">Get Coupon Code</button>
                                                                <div class="coupon-hide">{{strtoupper($coupon->code)}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                    <!-- end row -->
                                                </div>

                                                <div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_{{$coupon->id}}" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content panel">
                                                            <div class="modal-body">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                                </button>
                                                                <div class="row row-v-10">
                                                                    <div class="col-md-10 col-md-offset-1">
                                                                        <img src="{{asset('storage/app/public')}}/{{$coupon->getStore->image}}" alt="">
                                                                        <h3 class="mb-20">{{$coupon->name}}</h3>
                                                                        {!!$coupon->desc!!}
                                                                    </div>
                                                                    <div class="col-md-10 col-md-offset-1">
                                                                        <a href="{{$coupon->getStore->url}}" class="btn btn-link">Visit Our Store</a>
                                                                    </div>
                                                                    <div class="col-md-10 col-md-offset-1">
                                                                        <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                                        <a href="{{$coupon->url}}" target="_blank" class="coupon-code">{{strtoupper($coupon->code)}}</a>
                                                                    </div>
                                                                    <div class="col-md-10 col-md-offset-1">
                                                                        <div class="like-report mb-10">
                                                                            <span>Share this coupon :</span>
                                                                            <ul class="list-inline social-icons social-icons--colored mt-10">
                                                                                <li class="social-icons__item">
                                                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{$coupon->url}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                                </li>
                                                                                <li class="social-icons__item">
                                                                                    <a href="https://twitter.com/share?url={{$coupon->url}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                                </li>
                                                                                <li class="social-icons__item">
                                                                                    <a href="https://plus.google.com/share?url={{$coupon->url}}" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                                </li>
                                                                                <li class="social-icons__item">
                                                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                                                <h4 class="mb-15">Subscribe to Mail</h4>
                                                                <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                                                <form method="post" action="#">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control bg-white" placeholder="Your Email Address" required="required">
                                                                        <span class="input-group-btn">
                                                    <button class="btn" type="submit">Sign Up</button>
                                                </span>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <div class=" t-center" style="margin: 20px;">
                                            <h3>Nothing Found...</h3>
                                            </div>
                                            @endif
                                        </div>  
                                    </section>
                                </div>

                                <div role="tabpanel" class="tab-pane ptb-20 " id="deals">
                                    <section class="section coupons-area coupons-area-grid">
                                        <div class="row row-masnory row-tb-20">
                                            @if($deals->count() > 0)
                                            @foreach($deals as $deal)
                                                <div class="col-sm-6">
                                                    <div class="coupon-single panel t-center">
                                                    @if($deal->featured)
                                                        <div class="ribbon-wrapper is-hidden-xs-down">
                                                            <div class="ribbon">Featured</div>
                                                        </div>
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="text-center p-20">
                                                                <img class="store-logo" src="{{asset('storage/app/public')}}/{{$deal->image}}" alt="">
                                                            </div>
                                                            <!-- end media -->
                                                        </div>
                                                        <!-- end col -->

                                                        <div class="col-xs-12">
                                                            <div class="panel-body">
                                                                <ul class="deal-meta list-inline mb-10">
                                                                    <li class="color-green"><i class="ico lnr lnr-smile mr-5"></i>Verifed</li>
                                                                    <li class="color-muted"><i class="ico lnr lnr-users mr-5"></i>{{mt_rand(100, 540)}} Used</li>
                                                                </ul>
                                                                
                                                                <h4 class="deal-title mb-10">
                                                                    <a href="{{$coupon->url}}">{{$deal->name}}</a>
                                                                </h4>
                                                                <p class="mb-15 color-muted mb-20 font-12"><i class="lnr lnr-clock mr-10"></i>Expires On {{date('d F, Y', strtotime('tomorrow'))}}</p>
                                                                <div class="showcode">
                                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_{{$coupon->id}}">Get Offer</button>
                                                                    <div class="coupon-hide">{{strtoupper($deal->code)}}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                            <div class=" t-center" style="margin: 20px;">
                                            <h3>Nothing Found...</h3>
                                            </div>
                                            @endif
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Store Tabs Area -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Page Container -->

</main>
@endsection