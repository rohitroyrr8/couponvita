<section class="footer-top-area pt-70 pb-30 pos-r bg-blue">
            <div class="container">
                <div class="row row-tb-20">
                    <div class="col-sm-12 col-md-7">
                        <div class="row row-tb-20">
                            <div class="footer-col col-sm-6">
                                <div class="footer-about">
                                    <img class="mb-40" src="{{asset('images/logo_light.png')}}" width="250" alt="">
                                    <p class="color-light">CouponVita is one of the main coupon destinations in India, which helps each one of those passionate online customers in sparing more while shopping. </p>
                                </div>
                            </div>
                            <div class="footer-col col-sm-6">
                                <div class="footer-top-twitter">
                                    <h2 class="color-lighter">Twitter Feed</h2>
                                    <ul class="twitter-list">
                                        <li class="single-twitter">
                                            <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in reprehenderit.</p>
                                        </li>
                                        <li class="single-twitter">
                                            <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione id corrupti iusto cupiditate omnis.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="row row-tb-20">
                            <div class="footer-col col-sm-6">
                                <div class="footer-links">
                                    <h2 class="color-lighter">Quick Links</h2>
                                    <ul>
                                        <li><a href="{{url('./deals')}}">Latest Deals</a>
                                        </li>
                                        <li><a href="{{url('./coupons')}}">Newest Coupons</a>
                                        </li>
                                        <li><a href="{{url('./stores')}}">Best Stores</a>
                                        <li><a href="{{url('./privacy-policy')}}">privacy Policy</a>
                                        </li>   
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col col-sm-6">
                                <div class="footer-links">
                                    <h2 class="color-lighter">Quick Links</h2>
                                    <ul>
                                        <li><a href="{{url('./blog')}}">Go to Blog</a>
                                        </li>
                                        <li><a href="{{url('./contact')}}">Contact Us</a>
                                        <li><a href="{{url('./about')}}">About Us</a>
                                        </li>
                                        <li><a href="{{url('./terms')}}">Terms of use</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="mainFooter" class="main-footer">
            <div class="container">
                <div class="row">
                    <p>Copyright © {{env('APP_NAME')}} {{date('Y')}} . All rights reserved.</p>
                </div>
            </div>
        </footer>