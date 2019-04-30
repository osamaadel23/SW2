<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FAR7A</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="{{asset('site/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('site/css/animate.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('site/vendor/themify/themify.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('site/vendor/scrollbar/scrollbar.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('site/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('site/vendor/swiper/swiper.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('site/vendor/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="{{asset('site/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('site/css/global/global.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('site/img/favicon.ico')}}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{asset('site/img/apple-touch-icon.png')}}">
    </head>
    <!-- End Head -->
    @yield("header")
    <!-- Body -->
    <body>

        <!--========== HEADER V2 ==========-->
        <header class="navbar-fixed-top s-header-v2 js__header-sticky">
            <!-- Navbar -->
            <nav class="s-header-v2__navbar">
                <div class="container g-display-table--lg">
                    <!-- Navbar Row -->
                    <div class="s-header-v2__navbar-row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="s-header-v2__navbar-col">
                            <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                            <!-- Logo -->
                            <div class="s-header-v2__logo">
                                <a href="{{url('/index')}}" class="s-header-v2__logo-link">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="{{asset('site/img/logo-white.png')}}" alt="Dublin Logo">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="{{asset('site/img/logo.png')}}" alt="Dublin Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        
                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <!-- Home -->
                                    <li class="s-header-v2__nav-item"><a href="{{url('index')}}" class="s-header-v2__nav-link">Home</a></li>
                                    <!-- End Home -->
                                    
                                    <!-- Pages -->
                                   <li class="s-header-v2__nav-item"><a href="{{url('/team')}}" class="s-header-v2__nav-link">Team</a></li>
                                    <!-- End Pages -->

                                    <li class="s-header-v2__nav-item"><a href="{{url('/about')}}" class="s-header-v2__nav-link">About</a></li>
                                    <li class="s-header-v2__nav-item"><a href="{{url('/services')}}" class="s-header-v2__nav-link">Services</a></li>
                                    <li class="s-header-v2__nav-item"><a href="{{url('/contacts')}}" class="s-header-v2__nav-link s-header-v2__nav-link--dark">Contacts</a></li>
                                </ul>
                            </div>
                            <!-- End Nav Menu -->
                        </div>
                    </div>
                    <!-- End Navbar Row -->
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
        <!--========== END HEADER V2 ==========-->
