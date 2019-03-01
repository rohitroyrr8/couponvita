@extends('layouts.app')

@section('header')
<title>Featured Coupons - {{env('APP_NAME')}}</title>
@endsection

@section('content')
<main id="mainContent" class="main-content">
            <div class="page-container ptb-60">
                <div class="container">

                    <!-- Coupons Area -->
                    <div class="section coupons-area coupons-area-grid">

                        <!-- Page Control -->
                        <header class="page-control panel ptb-15 prl-20 pos-r mb-30">

                            <!-- List Control View -->
                            <ul class="list-control-view list-inline">
                                <li><a href="#"><i class="fa fa-bars"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-th"></i></a>
                                </li>
                            </ul>
                            <!-- End List Control View -->

                            <div class="right-10 pos-tb-center">
                                <select class="form-control input-sm">
                                    <option>SORT BY</option>
                                    <option>Newest items</option>
                                    <option>Best sellers</option>
                                    <option>Best rated</option>
                                    <option>Price: low to high</option>
                                    <option>Price: high to low</option>
                                </select>
                            </div>
                        </header>
                        <!-- End Page Control -->
                        <div class="row row-masnory row-tb-20">
                            @if($coupons->count() > 0)
                            @foreach($coupons as $coupon)
                                <div class="col-sm-6 col-md-4 col-lg-3">
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
                                                    <a href="{{$coupon->url}}">{{substr($coupon->name, 0, 34)}}</a>
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

                        <!-- Page Pagination -->
                        <div class="page-pagination text-center mt-30 p-10 panel">
                            <nav>
                                {{$coupons->links()}}
                            </nav>
                        </div>
                        <!-- End Page Pagination -->
                    </div>
                    <!-- End Coupons Area -->

                </div>
            </div>


        </main>
@endsection