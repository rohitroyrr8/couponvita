@extends('layouts.app')

@section('header')
<title>Contact Us - {{env('APP_NAME')}}</title>
@endsection

@section('content')
<main id="mainContent" class="main-content">
    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-10 row-tb-20">
                <div class="page-content col-xs-12 col-sm-7 col-md-8">
                    <div class="contact-area contact-area-v2 panel ptb-30 prl-20">
                        <div class="row row-tb-30">
                            <div class="col-xs-12">
                                <div class="contact-area-col contact-info">
                                    <div class="contact-info">
                                        <h3 class="t-uppercase h-title mb-20">Contact informations</h3>
                                        <p>We would love to hear from you. For any queries or promotions contact us at</p>
                                        <ul class="contact-list mb-40">
                                            <!-- <li>
                                                <span class="icon lnr lnr-map-marker"></span>
                                                <h5>Address</h5>
                                                <p class="color-mid">Comre, 404 Design Street, Melbourne, Australia</p>
                                            </li> -->
                                            <li>
                                                <span class="icon lnr lnr-envelope"></span>
                                                <h5>Email</h5>
                                                <p class="color-mid">{{env('EMAIL_1')}}</p>
                                            </li>
                                            <!-- <li>
                                                <span class="icon lnr lnr-phone-handset"></span>
                                                <h5>Our phone</h5>
                                                <p class="color-mid">(+212) 584-241-654</p>
                                            </li> -->
                                        </ul>
                                        <ul class="social-icons social-icons--colored list-inline">
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="social-icons__item">
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="contact-area-col contact-form">
                                    <h3 class="t-uppercase h-title mb-20">Get in touch</h3>
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input type="text" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea rows="5" class="form-control" required="required"></textarea>
                                        </div>
                                        <button class="btn">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Us Area -->


                </div>
                <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">

                    <!-- Blog Sidebar -->
                    <aside class="sidebar blog-sidebar">
                        <div class="row row-tb-10">
                            @include('includes.subscribe-sidebar')
                            @include('includes.contact-sidebar')
                            <div class="col-xs-12">
                                <!-- Instagram Widget -->
                                <div class="widget subscribe-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Latest tweets</h3>
                                    <div class="widget-body ptb-20">

                                        <ul class="twitter-list">
                                            <li class="twitter-list__item">
                                                <p>
                                                    <i class="twitter-icon fa fa-twitter"></i>
                                                    <a href="#">@masum_rana :</a>
                                                    <span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                                                </p>
                                            </li>
                                            <li class="twitter-list__item">
                                                <p>
                                                    <i class="twitter-icon fa fa-twitter"></i>
                                                    <a href="#">@masum_rana :</a>
                                                    <span class="tweet-text">Recusandae sed, aperiam earum sapiente rem neque officiis quaerat.</span>
                                                </p>
                                            </li>
                                            <li class="twitter-list__item">
                                                <p>
                                                    <i class="twitter-icon fa fa-twitter"></i>
                                                    <a href="#">@masum_rana :</a>
                                                    <span class="tweet-text">Sed quaerat, error harum sunt, sapiente voluptas temporibus porro quam, magnam dolores recusandae.</span>
                                                </p>
                                            </li>
                                            <li class="twitter-list__item">
                                                <p>
                                                    <i class="twitter-icon fa fa-twitter"></i>
                                                    <a href="#">@masum_rana :</a>
                                                    <span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Instagram Widget -->
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