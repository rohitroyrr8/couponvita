@extends('layouts.app')

@section('header')
<title>Featured Deals - {{env('APP_NAME')}}</title>
@endsection

@section('content')
<main id="mainContent" class="main-content">
    <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-md-8">


                        <section class="section deals-area">

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
                            <div class="row row-tb-20">
                                @if($deals->count() > 0)
                                @foreach($deals as $deal)
                                
                                <div class="col-xs-12">
                                    <div class="deal-single panel">
                                        <div class="row row-rl-0 row-sm-cell">
                                            <div class="col-sm-5">
                                                <figure class="deal-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('storage/app/public')}}/{{$deal->image}}" style="background-image: url(&quot;{{asset('storage/app/public')}}/{{$deal->image}}&quot;);">
                                                    <div class="label-discount left-20 top-15">-50%</div>
                                                    <ul class="deal-actions top-15 right-20">
                                                        <li class="share-btn">
                                                            <div class="share-tooltip fade">
                                                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{env('APP_URL')}}/deals/{{$deal->slug}}"><i class="fa fa-facebook"></i></a>
                                                                <a target="_blank" href="https://twitter.com/share?url={{env('APP_URL')}}/deals/{{$deal->slug}}"><i class="fa fa-twitter"></i></a>
                                                                <a target="_blank" href="https://plus.google.com/share?url={{env('APP_URL')}}/deals/{{$deal->slug}}"><i class="fa fa-google-plus"></i></a>
                                                                <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                            </div>
                                                           
                                                        </li>
                                                        
                                                    </ul>
                                                    
                                                </figure>
                                            </div>
                                            <div class="col-sm-7">
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
                                                    ( <span class="rating-count">{{mt_rand(10, 433)}}</span> rates )
                                                            </span>
                                                        </div>
                                                        <h3 class="deal-title mb-10">
                                                            <a href="{{url('./deals')}}/{{$deal->slug}}">{{$deal->name}}</a>
                                                        </h3>
                                                        <ul class="deal-meta list-inline mb-10 color-mid">
                                                            <li><i class="ico fa fa-shopping-basket mr-10"></i>120 Bought</li>
                                                        </ul>
                                                        <p class="text-muted mb-20">{!!substr($deal->desc, 0, 90)!!}...</p>
                                                    </div>
                                                    <div class="deal-price pos-r mb-15">
                                                        <h3 class="price ptb-5 text-right"><span class="price-sale">Rs. {{$deal->old_price}}</span>Rs. {{$deal->new_price}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                @else
                                    <div class=" p-4 text-center">
                                        <h3>Nothing Found...</h3>
                                    </div>
                                @endif
                            </div>

                            <!-- Page Pagination -->
                            <div class="page-pagination text-center mt-30 p-10 panel">
                                <nav>
                                    {{$deals->links()}}
                                </nav>
                            </div>
                            <!-- End Page Pagination -->

                        </section>

                    </div>
                    
                    @include('blog.sidebar')
                   
                </div>
            </div>
        </div>
</main>
@endsection