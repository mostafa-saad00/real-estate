<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="#" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="css/plugin.css" rel="stylesheet" />
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Document Title -->
    <title>@yield('title')</title>
</head>

<body>
    <!--Preloader starts-->
    <div class="preloader js-preloader">
        <img src="{{ asset('images/preloader.gif') }}" alt="...">
    </div>
    <!--Preloader ends-->
    <!--Page Wrapper starts-->
    <div class="page-wrapper">
        <!--header starts-->
        <header class="header transparent scroll-hide">
            <!--Main Menu starts-->
            <div class="site-navbar-wrap v1">
                <div class="container">
                    <div class="site-navbar">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-6 col-9 order-2 order-xl-1 order-lg-1 order-md-1">
                                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/Sweet_Home_Logo.png') }}" alt="logo" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-6 col-md-1 col-3  order-3 order-xl-2 order-lg-2 order-md-3 pl-xs-0">
                                <nav class="site-navigation text-right">
                                    <div class="container">
                                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                                            <li class="has-children3">
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li class="has-children3">
                                                <a href="{{ url('/find_property') }}">Listings</a>

                                            </li>
                                            <li class="has-children3">
                                                <a href="{{ url('/about-us') }}">About Us</a>
                                            </li>
                                            <li class="has-children3">
                                                <a href="{{ url('/contact-us') }}">Contact Us</a>
                                            </li>
                                            
                                            
                                        </ul>
                                    </div>
                                </nav>
                                <div class="d-lg-none sm-right">
                                    <a href="#" class="mobile-bar js-menu-toggle">
                                        <span class="lnr lnr-menu"></span>
                                    </a>
                                </div>
                                <!--mobile-menu starts -->
                                <div class="site-mobile-menu">
                                    <div class="site-mobile-menu-header">
                                        <div class="site-mobile-menu-close  js-menu-toggle">
                                            <span class="lnr lnr-cross"></span> </div>
                                    </div>
                                    <div class="site-mobile-menu-body"></div>
                                </div>
                                <!--mobile-menu ends-->
                            </div>
                            <div class="col-lg-4 col-md-5 col-12 order-1 order-xl-3 order-lg-3 order-md-2 text-right pr-xs-0">
                                <div class="menu-btn">
                                    <div class="add-list float-right ml-3">
                                        <a class="btn v6" href="{{ url('/contact-us') }}"><i class="lnr lnr-home"></i>Get Free Consultation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Main Menu ends-->
        </header>
        <!--Header ends-->

        @yield('content')

    </div>        




    






    <!--Footer Starts-->
    <div class="footer-wrapper v1">
        <div class="footer-top-area">
            <div class="container">
                <div class="row nav-folderized">
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-logo">
                            <a href="{{ url('/about-us') }}"> <img src="images/Sweet_Home_Logo.png" alt="logo"></a>
                            <div class="company-desc">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio excepturi nam totam sequi, ipsam consequatur repudiandae libero illum.
                                </p>
                                <ul class="list footer-list mt-20">
                                    <li>
                                        <div class="contact-info">
                                            <div class="icon">
                                                <i class="fa fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">90th st, New Cairo , Cairo, Egypt</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-info">
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text"><a href="#">info@sweethome.com.eg</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-info">
                                            <div class="icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="text">01005556663</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 text-center sm-left">
                        <div class="footer-content nav">
                            <h2 class="title">Popular Searches</h2>
                            <ul class="list res-list">
                                <li><a class="link-hov style2" href="{{ url('/find_property') }}">Property for Rent</a></li>
                                <li><a class="link-hov style2" href="{{ url('/find_property') }}#">Property for Sale</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 text-center sm-left">
                        <div class="footer-content nav">
                            <h2 class="title">Quick Links</h2>
                            <ul class="list res-list">
                                <li><a class="link-hov style2" href="{{ url('/about-us') }}">About us</a></li>
                                <li><a class="link-hov style2" href="{{ url('/contact-us') }}">Contact us</a></li>
                                <li><a class="link-hov style2" href="{{ url('/faq') }}">Privacy Policy</a></li>
                                <li><a class="link-hov style2" href="{{ url('/faq') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="footer-content">
                            <h4 class="title">Subscribe</h4>
                            <div class="value-input-wrap newsletter">
                                <form action="#">
                                    <input type="text" placeholder="Your mail address ..">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                            <div class="footer-social-wrap">
                                <p>Follow us on </p>
                                <ul class="social-buttons style2">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 offset-md-2">
                        <p>
                            ©SweetHome 2019. All rights reserved. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer ends-->




    <!--Scripts starts-->
    <!--plugin js-->
    <script src="js/plugin.js"></script>
    
    <!--Main js-->
    <script src="js/main.js"></script>
    <!--Scripts ends-->
</body>

</html>