@extends('layouts.app')

@section('header')
<title>Search all Store - {{env('APP_NAME')}}</title>
@endsection

@section('content')
<main id="mainContent" class="main-content">
    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <section class="stores-area stores-area-v1">
                <h3 class="mb-40 t-uppercase">View deals by stores</h3>
                <div class="row row-rl-15 row-tb-15 t-center">
                    @if($stores->count() > 0)
                    @foreach($stores as $store)
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="{{url('./store')}}/{{$store->slug}}" class="panel is-block">
                            <div class="embed-responsive embed-responsive-4by3">
                                <div class="store-logo">
                                    <img src="{{asset('/storage/app/public')}}/{{$store->image}}" alt="{{$store->name}} logo">
                                </div>
                            </div>
                            <h6 class="store-name ptb-10">{{$store->name}}</h6>
                        </a>
                    </div>
                    @endforeach
                    @else
                    <h3>Nothing Found...</h3>
                    @endif
                </div>

                <div class="page-pagination text-center mt-30 p-10 panel">
                    <nav>
                        {{ $stores->links() }}
                        
                    </nav>
                </div>
            </section>
        </div>
    </div>
    <!-- End Page Container -->


</main>
@endsection