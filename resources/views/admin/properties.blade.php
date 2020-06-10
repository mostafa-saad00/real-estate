@extends('layouts.adminmaster')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>

@endsection

@section('title', 'Add Property')


@section('content')



<!-- Dashboard Content starts-->
<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="recent-activity my-listing">



                    <div class="act-title">
                        <h5>My Listings</h5>
                    </div>


                    <router-view></router-view>

                    <div class="viewd-item-wrap">
                        <div class="most-viewed-item">
                            <div class="most-viewed-img">
                                <a href="#"><img src="images/property/property_1.jpg" alt="..."></a>
                                <ul class="feature_text">
                                    <li class="feature_or"><span>For Sale</span></li>
                                </ul>
                            </div>
                            <div class="most-viewed-detail">
                                <h3><a href="single-listing-one.html">Villa on Hartford</a></h3>
                                <p class="list-address"><i class="fas fa-map-marker-alt"></i>2854 Meadow View Drive, Hartford, USA</p>
                                <div class="trend-open">
                                    <p><span class="per_sale">starts from</span>$25000</p>
                                </div>
                                <div class="ratings">
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star-half"></i>
                                </div>
                                <div class="views">Views : <span>178</span></div>
                            </div>
                            <div class="listing-button">
                                <a href="#" class="btn v3"><i class="ion-edit"></i> Edit</a>
                                <a href="#" class="btn v4"><i class="ion-android-delete"></i> Delete</a>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Content ends-->


@endsection

@section('javascript')

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

@endsection