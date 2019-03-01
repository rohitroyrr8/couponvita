<header id="mainHeader" class="main-header">
            <div class="header-header bg-white">
                <div class="container">
                    <div class="row row-rl-0 row-tb-20 row-md-cell">
                        <div class="brand col-md-3 t-xs-center t-md-left valign-middle">
                            <a href="{{url('./')}}" class="couponvita logo">
                                <img src="{{asset('images/logo_dark.png')}}" alt="" width="250">
                            </a>
                        </div>
                        <div class="header-search col-md-9">
                            <div class="row row-tb-10 ">
                                <div class="col-sm-8">
                                    <form class="search-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control input-lg search-input" placeholder="Enter Keywork Here ..." required="required">
                                            <div class="input-group-btn">
                                                <div class="input-group">
                                                    <select class="form-control input-lg search-select">
                                                        <option>Select Your Category</option>
                                                        <option>Deals</option>
                                                        <option>Coupons</option>
                                                        <option>Discounts</option>
                                                    </select>
                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-lg btn-search btn-block">
                                                            <i class="fa fa-search font-16"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Header -->

            <!-- Header Menu -->
            <div class="header-menu bg-blue">
                <div class="container">
                    <nav class="nav-bar">
                        <div class="nav-header">
                            <span class="nav-toggle" data-toggle="#header-navbar">
                                <i></i>
                                <i></i>
                                <i></i>
                            </span>
                        </div>
                        <div id="header-navbar" class="nav-collapse">
                            <ul class="nav-menu">
                                <li class="active">
                                    <a href="{{url('./')}}">Home</a>
                                </li>
                                <li ><a href="{{url('./coupons')}}">Coupons</a></li>
                                <li ><a href="{{url('./deals')}}">Deals</a></li>
                                <li ><a href="{{url('./stores')}}">Stores</a></li>
                                <li ><a href="{{url('./contact')}}">Contact Us</a></li>
                                <li ><a href="{{url('./about')}}">About Us</a></li>
                            </ul>
                        </div>
                        <div class="nav-menu nav-menu-fixed">
                            <a href="{{url('./blog')}}" target="_blank">Go to Blog<i class="fa fa-long-arrow-right ml-10"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Header Menu -->

        </header>