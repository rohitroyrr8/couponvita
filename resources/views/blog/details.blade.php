@extends('layouts.app') 

@section('header')
<title>{{$post[0]->title}}- {{env('APP_NAME')}}</title>
@endsection 

@section('content')
<main id="mainContent" class="main-content">
    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-10 row-tb-20">
            	<div class="page-content col-xs-12 col-sm-7 col-md-8">

	                <div class="blog-post col-xs-12">
	                    <article class="entry panel">
	                        <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="{{asset('storage/app/public')}}/{{$post[0]->image}}" style="background-image: url(&quot;{{asset('storage/app/public')}}/{{$post[0]->image}}&quot;);">
	                            <div class="entry-date">
	                                <h4>{{date('d', strtotime($post[0]->updated_at))}}</h4>
	                                <h6>{{date('M', strtotime($post[0]->updated_at))}}</h6>
	                            </div>
	                        </figure>
	                        <div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">
	                            <header class="entry-header">
	                                <h4 class="entry-title mb-10 mb-md-15">
												{{$post[0]->title}}</h4>
	                                <div class="entry-meta mb-10">
	                                    <ul class="tag-info list-inline">
	                                        <li><i class="icon fa fa-user"></i> By : CouponVita User</li>
	                                        <li><i class="icon fa fa-bookmark"></i> Category : <a href="#">Deals</a> </li>
	                                    </ul>
	                                </div>
	                            </header>
	                            <div class="entry-content">
	                            	{!!$post[0]->body!!}
	                            </div>
	                            <!-- .entry-wrapper -->
	                            <footer class="entry-footer">
	                                <div class="blog-post-tags ptb-20">
	                                    <ul>
	                                        <li>Tags :</li>
	                                        <li>
	                                            <a href="#">Deals</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Shopping</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Coupons</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Commercial</a>
	                                        </li>
	                                    </ul>
	                                </div>
	                                <ul class="share-buttons ptb-20">
	                                    <li><a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u={{env('APP_URL')}}/blog/{{$post[0]->slug}}" target="_blank"><i class="fa fa-facebook"></i> Share</a>
	                                    </li>
	                                    <li><a class="twitter-share" href="https://twitter.com/share?url={{env('APP_URL')}}/blog/{{$post[0]->slug}}" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
	                                    </li>
	                                    <li><a class="gplus-share" href="https://plus.google.com/share?url={{env('APP_URL')}}/blog/{{$post[0]->slug}}" target="_blank"><i class="fa fa-google-plus"></i> Share</a>
	                                    </li>
	                                    <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a>
	                                    </li>
	                                </ul>
	                            </footer>
	                        </div>
	                    </article>
	                    <!-- <ul class="posts-nav ptb-40 mb-20">
	                        <li class="next-post">
	                            <a href="#"><i class="fa fa-angle-right"></i>
										<span>Next Post</span>
										Perspiciatis architecto magnam.</a>
	                        </li>
	                        <li class="prev-post">
	                            <a href="#"><i class="fa fa-angle-left"></i>
										<span>Previous Post</span>
										Tempore velit atque porro ?</a>
	                        </li>
	                    </ul> -->
	                </div>
	            </div>   
                @include('blog.sidebar')
            </div>
        </div>
    </div>
    <!-- End Page Container -->

</main>
@endsection