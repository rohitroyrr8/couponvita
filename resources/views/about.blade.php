@extends('layouts.app')

@section('header')
<title>About Us - {{env('APP_NAME')}}</title>
@endsection

@section('content')
<main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">

                    <!-- Contact Us Area -->
                    <section class="terms-area panel">
                        <div class="ptb-30 prl-30">
                            <h3 class="t-uppercase h-title mb-40">About {{env('APP_NAME')}}</h3>
                            <p class="mb-20">{{env('APP_NAME')}} is one of the main coupon destinations in India, which helps each one of those passionate online customers in sparing more while shopping. Indeed, we at {{env('APP_NAME')}} ensure that every one of
                            our clients get selective and the best arrangements and offer for different items at the most sensible
                            rates.</p>
                            <p class="mb-20">
                                We began off our administration as a little group and bit by bit now we have been fruitful in setting upourselves as a standout amongst the most favored coupon locales in India. With a dedicated group, werender benefits that can improve shopping an ordeal.
                            </p>
                            <p class="mb-20">
                                Our group involves web based business aficionados and shopping insane people who love to find thebest offers on the web and arrange them in a coupon stock that tosses huge number of choices for the customers to shop, spare and get charmed. We flourish to make a distinction as far as you can tell which is fast, conservative, and entertaining with discernable funds in your pocket.</p>
                            <p class="mb-20">   
                                We are a one-stop goal for all your shopping needs covering various e-stores providing food clients crosswise over India. From children toys to vehicles and contraptions, kitchen utensils to medicinal
                                service items, and a solitary hanky to whole home goods, and so on and we have everything at the most tempting costs. And all these we give in a simple to explore site with restrictive page for each and every
                                item. In this way, investigate, shop, and offer delights of shopping at {{env('APP_NAME')}}.
                            </p>
                        </div>
                    </section>
                    <!-- End Contact Us Area -->
                </div>
            </div>
            <!-- End Page Container -->
        </main>
@endsection