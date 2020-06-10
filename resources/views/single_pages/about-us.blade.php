@extends('layouts.master')

@section('title', 'About-Us')
@section('content')

    <!--Breadcrumb section starts-->
    <div class="breadcrumb-section bg-h" style="background-image: url(images/logo.png)">
        <div class="overlay op-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="breadcrumb-menu">
                        <h2>About us</h2>
                        <span><a href="{{ url('/') }}">Home</a></span>
                        <span>About us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section ends-->
    <!--About section starts-->
    <div class="about-section  pt-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="testimonial-video" style="background-image: url(images/logo.png)">
                        <div class="overlay op-3"></div>
                        <div class="testimonial-btn">
                            <a href="{{ $about_info->youtube_url }}" class="property-yt hvr-ripple-out"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section-title v3">
                        <p>{{ $about_info->header_1 }}</p>
                        <h2>{{ $about_info->header_2 }}</h2>
                    </div>
                    <div class="about-text res-box">
                        <!--<span>All You Need in Just One Place</span>
                        <h2>We’ve made a life
                            that will change you</h2>-->
                        <p>{{ $about_info->text_1 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About section ends-->
    <!--Promo Section starts-->
    <div class="promo-section pt-120 v2">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="promo-desc">
                        <div class="section-title v2">
                            <p>{{ $about_info->why_choose_us_header }}</p>
                            <h2>Why choose us</h2>
                        </div>
                        <div class="promo-text">
                            <p>{{ $about_info->why_choose_us_text }}</p>
                        </div>
                        <div class="row pt-5">
                            <div class="col-sm-4 col-6">
                                <div class="counter-text v2">
                                    <i class="lnr lnr-apartment"></i>
                                    <h6 class="counter-value" data-from="0" data-to="10" data-speed="2500">
                                    </h6>
                                    <p>Years of experience</p>

                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="counter-text v2">
                                    <i class="lnr lnr-thumbs-up"></i>
                                    <h6 class="counter-value" data-from="0" data-to="585" data-speed="2000">
                                    </h6>
                                    <p> Happy Customers</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="promo-content-wrap">
                                <div class="promo-content">
                                    <img src="images/category/pin.png" alt="...">
                                    <h4>{{ $home_info->section_1_p }}</h4>
                                    <p>{{ $home_info->section_1_t }}</p>
                                </div>
                                <div class="promo-content">
                                    <img src="images/category/rent.png" alt="...">
                                    <h4>{{ $home_info->section_2_p }}</h4>
                                    <p>{{ $home_info->section_2_t }}</p>
                                </div>
                                <div class="promo-content">
                                    <img src="images/category/customer_support.png" alt="...">
                                    <h4>{{ $home_info->section_3_p }}</h4>
                                    <p>{{ $home_info->section_3_t }}</p>
                                </div>
                                <div class="promo-content">
                                    <img src="images/category/deal.png" alt="...">
                                    <h4>{{ $home_info->section_4_p }}</h4>
                                    <p>{{ $home_info->section_4_t }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Promo Section ends-->

    
    
    


    <!-- Scroll to top starts-->
    <span class="scrolltotop"><i class="lnr lnr-arrow-up"></i></span>
    <!-- Scroll to top ends-->
</div>
<!--Page Wrapper ends-->

@endsection