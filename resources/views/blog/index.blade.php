@extends('layouts.app')

@section('header')
<title>Blog - {{env('APP_NAME')}}</title>
@endsection

@section('content')
<main id="mainContent" class="main-content">

            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-content col-xs-12 col-sm-7 col-md-8">

                            <!-- Blog Area -->
                            <section class="blog-area blog-classic">

                                <div class="row row-tb-20">
                                    @if($posts->count() > 0)
                                    @foreach($posts as $post)
                                    <!-- Blog Post -->
                                    <div class="blog-post col-xs-12">
                                        <article class="entry panel">
                                            <div class="row row-rl-0 row-tb-0 row-md-cell">
                                                <div class="col-xs-12 col-md-6 col-lg-5">
                                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9 col-absolute-cell" data-bg-img="{{asset('storage/app/public')}}/{{$post->image}}" style="background-image: url(&quot;{{asset('storage/app/public')}}/{{$post->image}}&quot;);">
                                                        <div class="entry-date">
                                                            <h4>{{date('d', strtotime($post->updated_at))}}</h4>
                                                            <h6>{{date('M', strtotime($post->updated_at))}}</h6>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="col-xs-12 col-md-6 col-lg-7 prl-15 prl-md-20 pt-20 pt-md-30 pb-15">
                                                    <div class="entry-wrapper">
                                                        <header class="entry-header">
                                                            <h3 class="entry-title mb-10 mb-md-15">
													<a href="{{url('./blog')}}/{{$post->slug}}">{{$post->title}}</a>
												</h3>
                                                            <div class="entry-meta mb-10">
                                                                <ul class="tag-info list-inline">
                                                                    <li> <i class="icon fa fa-user"></i> By : {{env('APP_NAME')}} User</li>
                                                                    <li><i class="icon fa fa-bookmark"></i> Category : {{$post->category_id}} </li>
                                                                </ul>
                                                            </div>
                                                        </header>

                                                        <div class="entry-content">
                                                           {!!substr($post->body, 0, 150)!!} 
                                                        </div>
                                                        <!-- .entry-wrapper -->

                                                        <footer class="entry-footer text-right">
                                                            <a href="{{url('./blog')}}/{{$post->slug}}" class="more-link btn btn-link">Continue reading <i class="icon fa fa-long-arrow-right"></i></a>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- End Blog Post -->
                                    @endforeach
                                    @else
                                    <h3>Nothing Found...</h3>
                                    @endif
                                </div>

                                <!-- Blog Pagination -->
                                <div class="page-pagination text-center mt-30 p-10 panel">
                                    <nav>
                                        {{$posts->links()}}
                                    </nav>
                                </div>
                                <!-- End Blog Pagination -->

                            </section>
                            <!-- End Blog Area -->

                        </div>
                        @include('blog.sidebar')
                    </div>
                </div>
            </div>
            <!-- End Page Container -->


        </main>
@endsection