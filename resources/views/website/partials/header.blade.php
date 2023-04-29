@php
    use Illuminate\Support\Str;
@endphp

<header id="header">
    <!-- Begin .top-menu -->
    <div class="top-menu">
        <!-- Begin .container -->
        <div class="container">
            <!-- Begin .left-top-menu -->
            <ul class="left-top-menu">
                <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> </li>
                <li> <a href="#" class="youtube"> <i class="fa fa-youtube"></i></a> </li>
                <li> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> </li>
                <li> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> </li>
                <li> <a href="#" class="instagram"> <i class="fa fa-instagram"></i></a> </li>
                <li class="address"><a href="#"><i class="fa fa-phone"></i> +00 (123) 456 7890</a></li>
                <li class="address"><a href="#"><i class="fa fa-envelope-o"></i> info@domain.com</a></li>
            </ul>
            <!-- End .left-top-menu -->
            <!-- Begin .right-top-menu -->
            <ul class="right-top-menu pull-right">
                <li class="contact"><a href="contact.html"><i class="fa fa-map-marker fa-i"></i></a></li>
                <li class="about"><a href="{{ route('getLogin') }}"><i class="fa fa-user fa-i"></i></a> </li>
                <li>
                    <div class="search-container">
                        <div class="search-icon-btn"> <span style="cursor:pointer"><i class="fa fa-search"></i></span>
                        </div>
                        <div class="search-input">
                            <input type="search" class="search-bar" placeholder="Search..." title="Search" />
                        </div>
                    </div>
                </li>
            </ul>
            <!-- End .right-top-menu -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .top-menu -->
    <!-- Begin .container -->
    <div class="container">
        <!-- Begin .header-logo -->
        <div class="header-logo"><a href="{{ route('website.index') }}"><img src="{{ asset('website/img/logo.png') }} "
                    alt="Site Logo" />
                <h1>24h <span>News</span></h1>
                <h4>Your 24h News Source</h4>
            </a></div>
        <!-- End .header-logo -->

        <!--========== BEGIN .NAVBAR #MOBILE-NAV ==========-->
        <nav class="navbar navbar-default" id="mobile-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" id="sidenav-toggle"> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <div class="sidenav-header-logo"><a href="index.html"><img src="{{ asset('website/img/logo.png') }} "
                            alt="Site Logo" />
                        <h2>24h <span>News</span></h2>
                        <h5>Your 24h News Source</h5>
                    </a></div>
            </div>
            <div class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle">
                <button type="button" class="navbar-toggle active" data-toggle="collapse"> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <div class="sidenav-brand">
                    <div class="sidenav-header-logo"><a href="{{ route('website.index') }}"><img
                                src="{{ asset('website/img/logo.png') }} " alt="Site Logo" />
                            <h2>24h <span>News</span></h2>
                            <h5>Your 24h News Source</h5>
                        </a></div>
                </div>
                <ul class="sidenav-menu">
                    <li class="active"><a href="{{ route('website.index') }}">Home</a></li>
                    @foreach ($new_header as $item)
                        <li><a
                                href="{{ route('website.category_news', ['name_cate' => Str::of($item->name_cate)->slug('-'), 'id' => $item->id_category]) }}">{{ $item->name_cate }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <!--========== END .NAVBAR #MOBILE-NAV ==========-->
    </div>
    <!-- End .container -->
    <!--========== BEGIN .NAVBAR #FIXED-NAVBAR ==========-->
    <div class="navbar" id="fixed-navbar">
        <!--========== BEGIN MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->
        <div class="main-menu nav navbar-collapse collapse" id="fixed-navbar-toggle">
            <!--========== BEGIN .CONTAINER ==========-->
            <div class="container">
                <!-- Begin .nav navbar-nav -->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('website.index') }}">Home</a></li>
                    @foreach ($new_header as $item)
                        <li><a
                                href="{{ route('website.category_news', ['name_cate' => Str::of($item->name_cate)->slug('-'), 'id' => $item->id_category]) }}">{{ $item->name_cate }}</a>
                        </li>
                    @endforeach


                    <!--========== BEGIN .DROPDOWN ==========-->

                    <!--========== END .DROPDOWN ==========-->
                    <!--========== BEGIN DROPDOWN MEGA-DROPDOWN ==========-->
                    <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle"
                            data-toggle="dropdown">Mega Menu</a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <!-- Begin col-sm-4-->
                            <li class="col-sm-4">
                                <h3 class="title">24h News In Pictures</h3>
                                <!-- Begin carousel-1-->
                                <div id="carousel-1" class="nav-slider carousel slide slide-carousel"
                                    data-ride="carousel">
                                    <!-- Begin carousel-indicators-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-1" data-slide-to="1"></li>
                                        <li data-target="#carousel-1" data-slide-to="2"></li>
                                    </ol>
                                    <!-- End carousel-indicators-->
                                    <!-- Begin carousel-inner-->
                                    <div class="carousel-inner">
                                        <div class="item active"> <a href="#"><img
                                                    src="{{ asset('website/img/menu_slide-image01.jpg ') }}"
                                                    alt=""></a> </div>
                                        <div class="item"> <img
                                                src="{{ asset('website/img/menu_slide-image02.jpg ') }}"
                                                alt=""> </div>
                                        <div class="item"> <img
                                                src="{{ asset('website/img/menu_slide-image03.jpg ') }}"
                                                alt=""> </div>
                                    </div>
                                    <!-- End carousel-inner-->
                                    <a class="left carousel-control" href="#carousel-1" role="button"
                                        data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
                                            aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a
                                        class="right carousel-control" href="#carousel-1" role="button"
                                        data-slide="next"> <span class="glyphicon glyphicon-chevron-right"
                                            aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                                <!-- End carousel-1-->
                            </li>
                            <!-- End col-sm-4 -->
                            <!-- Begin col-sm-4 -->
                            <li class="col-sm-4">
                                <h3 class="title">Latest News</h3>
                                <ul class="media-list">
                                    <li class="media"> <a class="pull-right" href="news.html"><img
                                                class="img-responsive" alt=""
                                                src="{{ asset('website/img/menu_small-image01.jpg ') }}"></a>
                                        <div class="media-body">
                                            <p> <a href="news.html" target="_blank"><span
                                                        class="bg-1">News</span></a><a href="news.html">Thousands of
                                                    people have demonstrated against...</a></p>
                                        </div>
                                    </li>
                                    <li class="media"> <a class="pull-right" href="sport.html"><img
                                                src="{{ asset('website/img/menu_small-image02.jpg ') }}"
                                                alt="" class="img-image media-object"></a>
                                        <div class="media-body">
                                            <p> <a href="sport.html" target="_blank"><span
                                                        class="bg-4">Sport</span></a><a href="sport.html">Europe's
                                                    top four leagues are to be guaranteed four places...</a></p>
                                        </div>
                                    </li>
                                    <li class="media"> <a class="pull-right" href="health.html"><img
                                                src="{{ asset('website/img/menu_small-image03.jpg ') }}"
                                                alt="" class="img-image media-object"></a>
                                        <div class="media-body">
                                            <p><a href="health.html" target="_blank"><span
                                                        class="bg-2">Health</span></a><a href="health.html">Robot
                                                    performs surgery on soft tissue better than human...</a></p>
                                        </div>
                                    </li>
                                    <li class="media"> <a class="pull-right" href="lifestyle.html"><img
                                                src="{{ asset('website/img/menu_small-image04.jpg ') }}"
                                                alt="" class="img-image media-object"></a>
                                        <div class="media-body">
                                            <p><a href="lifestyle.html" target="_blank"><span
                                                        class="bg-9">Lifestyle</span></a><a href="lifestyle.html">A
                                                    positive lifestyle can bring you happiness...</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- End col-sm-4 -->
                            <!-- Begin col-sm-4 -->
                            <li class="col-sm-4">
                                <h3 class="title">Video</h3>
                                <div class="video-container">
                                </div>
                            </li>
                            <!-- End col-sm-4 -->
                            <!-- Begin col-sm-8 -->
                            <li class="col-sm-8">
                                <h3 class="title">About Us</h3>
                                <p><a href="about-us.html" target="_blank"><strong>24h News</strong> is among the
                                        world's entry-posters in online news and information delivery. Help us make your
                                        comments count. Use our viewer comment page to tell us what you think about our
                                        shows and our hot topics for the day.</a></p>
                            </li>
                            <!-- End col-sm-8 -->
                            <!-- Begin col-sm-4 -->
                            <li class="col-sm-4">
                                <h3 class="title">Follow Us</h3>
                                <div class="menu-social-icons">
                                    <ul>
                                        <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li> <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li> <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                        <li> <a href="#" class="google-plus"><i
                                                    class="fa fa-google-plus"></i></a> </li>
                                        <li> <a href="#" class="rss"><i class="fa fa-rss"></i></a> </li>
                                        <li> <a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a> </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- End col-sm-4 -->
                        </ul>
                    </li>
                    <!--========== END DROPDOWN MEGA-DROPDOWN ==========-->
                </ul>
                <!--========== END .NAV NAVBAR-NAV ==========-->
            </div>
            <!--========== END .CONTAINER ==========-->
        </div>
        <!--========== END MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->
        <!--========== BEGIN .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->
        <div class="second-menu navbar" id="nav-below-main">
            <!-- Begin .container -->
            <div class="container">
                <!-- Begin .collapse navbar-collapse -->
                <div class="collapse navbar-collapse nav-below-main">
                    <!-- Begin .nav navbar-nav -->
                    <ul class="nav navbar-nav">
                        @foreach ($mini_categories as $category)
                            <li><a href="{{ route('website.category_news', ['name_cate' => Str::of($category->name_cate)->slug('-'), 'id' => $category->id_category]) }}">{{ $category->name_cate }}</a></li>
                        @endforeach
                    </ul>
                    <!-- End .nav navbar-nav -->
                </div>
                <!-- End .collapse navbar-collapse -->
                <!-- Begin .clock -->

                <!-- End .clock -->
            </div>
            <!-- End .container -->
        </div>
        <!--========== END .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->
    </div>
</header>
@if (Session::get('success'))
<div class="alert alert-success">
    <ul>        
            <li>{!! Session::get('success') !!}</li>            
    </ul>
</div>
@endif
@if (Session::get('error'))
<div class="alert alert-danger" >
    <ul>        
            <li>{!! Session::get('error') !!}</li>            
    </ul>
</div>
@endif
<section id="main-section">
