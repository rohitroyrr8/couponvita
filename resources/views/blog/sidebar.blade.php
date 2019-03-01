<div class="page-sidebar col-md-4 col-sm-5 col-xs-12">

    <!-- Blog Sidebar -->
    <aside class="sidebar blog-sidebar">
        <div class="row row-tb-10">
            <div class="col-xs-12">
                <!-- Search Form -->
                <div class="widget search-form panel ptb-30 prl-20">
                    <div class="widget-body">
                        <form method="get" action="{{route('blog.search')}}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." required="required" name="query">
                                <span class="input-group-btn">
                		        	<button class="btn" type="submit"><i class="fa fa-search font-16"></i></button>
                		    	</span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Search Form -->
            </div>
            <div class="col-xs-12">
                <!-- Recent Posts -->
                <div class="widget recent-posts panel pt-20 prl-20">
                    <h3 class="widget-title h-title">Recent Posts</h3>
                    <div class="widget-body ptb-30">
                        @if($recents->count() > 0)
                        @foreach($recents as $post)
                        <div class="recent-post media">
                            <div class="post-thumb media-left">
                                <a href="{{url('./blog')}}/{{$post->slug}}">
                                    <img class="media-object" src="{{asset('storage/app/public')}}/{{$post->image}}" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h5 class="font-15 mb-10">
                                    <a href="{{url('./blog')}}/{{$post->slug}}">{{substr($post->title, 0, 30)}}</a>
                                </h5>
                                <ul class="post-meta list-inline">
                                    <li> <i class="ico fa fa-user mr-5"></i>{{env('APP_NAME')}} User</li>
                                    <li><i class="ico fa fa-calendar mr-5"></i>{{date('d M, Y', strtotime($post->updated_at))}}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <h3>Nothing Found...</h3>
                        @endif
                    </div>
                </div>
                <!-- End Recent Posts -->
            </div>
            <div class="col-xs-12">
                <!-- Categories Widget -->
                <div class="widget categories-widget panel pt-20 prl-20">
                    <div class="widget-header">
                        <h3 class="widget-title h-title">Blog Categories</h3>
                    </div>
                    <div class="widget-body ptb-20">
                        <ul>
                            @if($categories->count() > 0)
                            @foreach($categories as $category)
                                <li>
                                <a href="{{url('./blog/category')}}/{{$category->slug}}">{{$category->name}} </a>
                                </li>
                            @endforeach
                            @else
                            <li>Nothing Found...</li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
                <!-- End Categories Widget -->
            </div>
            @include('includes.subscribe-sidebar')
            @include('includes.contact-sidebar')
            <div class="col-xs-12">
                <!-- Trending Stores -->
                <div class="widget trend-store-widget panel pt-20 prl-20">
                    <h3 class="widget-title h-title">Trending Stores</h3>
                    <div class="widget-body ptb-30">
                        @if($stores->count() > 0)
                        @foreach($stores as $store)
                        <div class="trend-store-item media">
                            <div class="post-thumb media-left">
                                <a href="{{url('./store')}}/{{$store->slug}}">
                                    <img class="media-object pr-10" width="90" src="{{asset('storage/app/public')}}/{{$store->image}}" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-5">
                                    <a href="{{url('./store')}}/{{$store->slug}}">{{$store->name}}</a>
                                    <span class="rating">
                                        <span class="rating-stars" data-rating="4">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o star-active"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                    </span>
                                </h5>
                                <p class="color-mid">{{$store->name}} offers its customers a variety of deals and promotional codes</p>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <h3>Nothing Found...</h3>
                        @endif
                    </div>
                </div>
                <!-- End Trending Stores -->
            </div>
        </div>
    </aside>
    <!-- End Blog Sidebar -->
</div>