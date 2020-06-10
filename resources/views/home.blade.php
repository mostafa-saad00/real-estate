@extends('layouts.master')
 
@section('title', 'Sweet Home')
@section('content')


<!--Hero section starts-->
<div class="hero-parallax bg-fixed" style="background-image: url(images/property2.jpg)">
    <div class="overlay op-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                            <div class="header-text v2" style="color:red">
                                <span style="color:#fff">{{ $home_info->text_1 }} </span>
                                <h1 style="color:#fff">{{ $home_info->text_2 }}</h1>
                                <p style="color:#fff">{{ $home_info->text_3 }}</p>
                            </div>
                        </div>
                        <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-12">
                            <div class="hero-slider-info">
                                <form class="hero__form v3 filter listing-filter" method="GET" action="/search" id="my_form">
                                    <h4>{{ url('/') }}</h4>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="input-search">
                                                <input type="text" class="" name="location" id="place-event" placeholder="Enter Property Location, Area ...">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-6 mb-3">
                                            <select class="form-control custom-select" name="buyorrent">
                                                
                                                <option>For Rent</option>
                                                <option>For Sale</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-4 col-sm-6 mb-3">
                                            <select class="form-control custom-select" name="type">
                                                <option>Apartment</option>
                                                <option>Villa</option>
                                                <option>Townhouse</option>
                                                <option>penthouse</option>
                                                <option>Compound</option>
                                                <option>Chalet</option>
                                                <option>Twin house</option>
                                                <option>Duplex</option>
                                                <option>Full floor</option>
                                                <option>Half floor</option>
                                                <option>Whole Building</option>
                                                <option>Land</option>
                                                <option>Bulk sale unit</option>
                                                <option>Bungalow</option>
                                                <option>Hotel Apartment</option>
                                                <option>iVilla</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-4 col-sm-6 mb-3">
                                            <select class="form-control custom-select" name="bedrooms">
                                                <option>Bed</option>
                                                <option>6</option>
                                                <option>5</option>
                                                <option>4</option>
                                                <option>3</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-4 col-sm-6 mb-3">
                                            <select class="form-control custom-select" name="bathrooms">
                                                <option>Bath</option>
                                                <option>4</option>
                                                <option>3</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-8 col-sm-12">
                                            <div class="filter-sub-area style1">
                                                <div class="filter-title mb-10">
                                                    <p>Price : <span><input type="text" style="background: none" disabled="" id="amount_two"></span></p>
                                                    <input type="text" id="price" name="price" style="display: none">
                                                </div>
                                                <div id="slider-range_two" class="price-range mb-20">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="search_btn">

                                                <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">Search Property</a>
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
    </div>
</div>
<!--Hero section ends-->





<!--Trending events starts-->
<div class="trending-places py-130 mt-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title v1">
                    <p>Browse some of our</p>
                    <h2>Recent Properties</h2>
                    <div>{{ $realestates->links() }}</div>
                </div>
            </div>
            <div class="swiper-container trending-place-wrap">
                <div class="swiper-wrapper">

                    @foreach($realestates as $realestate)



                    
                    <div class="swiper-slide">
                        <div class="single-property-box">
                            <div class="property-item">
                                <a class="property-img" href="{{ url('/property') }}/{{ $realestate->id }}">
                                    @foreach($realestate->images as $image)
                                                                                                    
                                        <img src="{{ asset('storage') }}/{{$image->image_name}}">
                                        @break
                                        
                                    @endforeach
                                </a>

                                <ul class="feature_text">
                                    <li class="feature_cb"><span>New</span></li>
                                    <li class="feature_or"><span>{{ $realestate->buyorrent }}</span></li>
                                </ul>
                                <div class="property-author-wrap">
                                    <a href="#" class="property-author">
                                        <img src="{{ asset('images/logo.png') }}" alt="...">
                                        <span>Sweet Home</span>
                                    </a>
                                    
                                    
                                </div>
                            </div>
                            <div class="property-title-box">
                                <h4><a href="single-listing-one.html">Comfortable Family Apartment</a></h4>
                                <div class="property-location">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <p>{{ $realestate->area }}, {{ $realestate->city }}, Egypt</p>
                                </div>
                                <ul class="property-feature">
                                    <li> <i class="fas fa-bed"></i>
                                        <span>{{ $realestate->bedrooms }} Bedrooms</span>
                                    </li>
                                    <li> <i class="fas fa-bath"></i>
                                        <span>{{ $realestate->bathrooms }} Bath</span>
                                    </li>
                                    <li> <i class="fas fa-arrows-alt"></i>
                                        <span>{{ $realestate->total_area }} m2</span>
                                    </li>
                                    <li> <i class="fas fa-car"></i>
                                        <span>{{ $realestate->parking }} Garage</span>
                                    </li>
                                </ul>
                                <div class="trending-bottom">
                                    <div class="trend-left float-left">
                                        <ul class="product-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star-half-alt"></i></li>
                                            <li><i class="fas fa-star-half-alt"></i></li>
                                        </ul>
                                    </div>
                                    <a class="trend-right float-right">
                                        <div class="trend-open">
                                            <p>{{ $realestate->price  }} L.E <span class="">{{ $realestate->buyorrent == "For Sale" ? '' : '/ month' }}</span></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    
                    

                </div>
            </div>
            <div class="trending-pagination"></div>
        </div>
    </div>
</div>
<!--Trending events ends-->



<!--Promo Section starts-->
<div class="promo-section  py-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title v1">
                    
                    <h2>Why Choose us</h2>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="promo-img ">
                    <img src="{{ asset('/images/logo.png') }}" alt="...">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="promo-content-wrap">
                    <div class="row promo-content">
                        <div class="col-md-2">
                            <img src="images/category/property_listing.png" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="promo-text">
                                <h4>{{ $home_info->section_1_p }}</h4>
                                <p>{{ $home_info->section_1_t }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row promo-content">
                        <div class="col-md-2">
                            <img src="images/category/rent.png" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="promo-text">
                                <h4>{{ $home_info->section_2_p }}</h4>
                                <p>{{ $home_info->section_2_t }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row promo-content">
                        <div class="col-md-2">
                            <img src="images/category/customer_support.png" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="promo-text">
                                <h4>{{ $home_info->section_3_p }}</h4>
                                <p>{{ $home_info->section_3_t }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row promo-content">
                        <div class="col-md-2">
                            <img src="images/category/deal_1.png" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="promo-text">
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




@endsection
