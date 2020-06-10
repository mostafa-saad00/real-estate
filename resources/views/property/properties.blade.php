@extends('layouts.master_property')

@section('title', 'Find Your Property')


@section('content')

<div class="filter-wrapper style1 section-padding" >

    <div class="container">
        <div class="row">
            <!--Listing filter starts-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <form class="hero__form v1 filter listing-filter property-filter">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12 py-3 pl-30 pr-0">
                                    <div class="input-search">
                                        <input type="text" name="place-event" id="place-event" placeholder="Enter Property, Location, Landmark ...">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 py-3 pl-30 pr-0">
                                    <select class="hero__form-input  custom-select">
                                        <option>Select Area</option>
                                        <option>New York</option>
                                        <option>California</option>
                                        <option>Washington</option>
                                        <option>New Jersey</option>
                                        <option>Los angeles</option>
                                        <option>Florida</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 py-3 pl-30 pr-0">
                                    <select class="hero__form-input  custom-select">
                                        <option>Select City</option>
                                        <option>New York</option>
                                        <option>California</option>
                                        <option>Washington</option>
                                        <option>New Jersey</option>
                                        <option>Los angeles</option>
                                        <option>Florida</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 py-3 pl-30 pr-0">
                                    <div class="submit_btn">
                                        <button class="btn v3" type="submit">Search</button>
                                    </div>
                                    <div class="dropdown-filter"><span>More Filters</span></div>
                                </div>
                                <div class="explore__form-checkbox-list full-filter">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 py-1 pr-30">
                                            <select class="hero__form-input  custom-select mb-20">
                                                <option>Property Status</option>
                                                <option>Any</option>
                                                <option>For Rent</option>
                                                <option>For Sale</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                            <select class="hero__form-input  custom-select  mb-20">
                                                <option>Property Type</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Land</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pl-0">
                                            <select class="hero__form-input  custom-select  mb-20">
                                                <option>Max rooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pr-30 ">
                                            <select class="hero__form-input  custom-select  mb-20">
                                                <option>Bed</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                            <select class="hero__form-input  custom-select  mb-20">
                                                <option>Bath</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pl-0">
                                            <select class="hero__form-input  custom-select  mb-20">
                                                <option>Agents</option>
                                                <option>Bob Haris</option>
                                                <option>Ross buttler</option>
                                                <option>Andrew Saimons</option>
                                                <option>Steve Austin</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pr-30">
                                            <select class="hero__form-input  custom-select  mb-20">
                                                <option>Agencies</option>
                                                <option>Onyx Equities</option>
                                                <option>OVG Real Estate</option>
                                                <option>Oxford Properties*</option>
                                                <option>Cortland</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                            <div class="filter-sub-area style1">
                                                <div class="filter-title mb-10">
                                                    <p>Price : <span><input type="text" id="amount_two"></span></p>
                                                </div>
                                                <div id="slider-range_two" class="price-range mb-30">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1  pl-0">
                                            <div class="filter-sub-area style1">
                                                <div class="filter-title  mb-10">
                                                    <p>Area : <span><input type="text" id="amount_one"></span></p>
                                                </div>
                                                <div id="slider-range_one" class="price-range mb-30">
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Listing filter ends-->


            

            <div class="col-md-12">


                <div class="item-wrapper pt-40">
                    <div class="tab-content" id="myTabContent">

                        @foreach($properties as $property)
                        <div class="tab-pane  show active fade property-list fullwidth" id="list-view">
                            <div class="single-property-box">
                                
                                <div class="row">
                                    <div class="col-xl-5 col-lg-4 col-md-12">
                                        <div class="property-item">
                                            <a class="property-img" href="{{ url('/property') }}/{{ $property->id }}">                                                                   
                                                <img src="{{ asset('properties_images') }}/{{$property->images->where('first_image', 1)->first()->image_name}}">   
                                            </a>
                                            <ul class="feature_text">
                                                <li class="feature_cb"><span> Featured</span></li>
                                                <li class="feature_or"><span>{{ $property->buyorrent }}</span></li>
                                            </ul>
                                           
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-5 col-md-12">
                                        <div class="property-title-box">
                                            <h4><a href="{{ url('/property') }}/{{ $property->id }}">{{ $property->en_title }}</a></h4>
                                            <div class="property-location">
                                                <i class="fa fa-map-marker-alt"></i>
                                                <p>{{ $property->area }}, {{ $property->city }}, Egypt</p>
                                            </div>
                                            <ul class="property-feature">
                                                <li> <i class="fas fa-bed"></i>
                                                    <span>{{ $property->bedrooms }} Bedrooms</span>
                                                </li>
                                                <li> <i class="fas fa-bath"></i>
                                                    <span>{{ $property->bathrooms }} Bath</span>
                                                </li>
                                                <li> <i class="fas fa-arrows-alt"></i>
                                                    <span>{{ $property->total_area }} m2</span>
                                                </li>
                                                <li> <i class="fas fa-car"></i>
                                                    <span>{{ $property->parking }} Garage</span>
                                                </li>
                                            </ul>
                                            <div class="trending-bottom">
                                                <div class="trend-left float-left">
                                                    <p class="list-date"><i class="lnr lnr-calendar-full"></i>{{ $property->created_at->format('d M Y') }}</p>
                                                </div>
                                                <div class="trend-right float-right">
                                                    <ul class="product-rating">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12">
                                        <div class="row list-extra">
                                            <div class="col-md-12 col-7 sm-left">
                                                <div class="trend-open">
                                                    <p><span class="per_sale">Price</span>{{ $property->price }} L.E</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-5">
                                                <a href="{{ url('/property') }}/{{ $property->id }}" class="btn v7">Take a tour</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>


                        </div>

                        @endforeach

                        <!--pagination starts-->
                        <div class="post-nav nav-res pt-50  ">
                            <div class="row">
                                <div class="col-md-8 offset-md-2  col-xs-12 ">
                                    <div class="page-num text-center">
                                        {{ $properties->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--pagination ends-->
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
    <!--Listing filter ends-->
    <!-- Scroll to top starts-->
    <span class="scrolltotop"><i class="lnr lnr-arrow-up"></i></span>
    <!-- Scroll to top ends-->
</div>
<!--Page Wrapper ends-->


@endsection







