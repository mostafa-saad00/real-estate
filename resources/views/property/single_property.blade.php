 @extends('layouts.master_property')

@section('title', 'Find Your Property')


@section('content')


        <div class="property-details-wrap bg-cb">
            <!--Listing Details Hero starts-->                                        
            <div class="single-property-header v1 bg-h mt-60" style="background-image: url(/properties_images/{{ $property->images->where('first_image', 1)->first()->image_name }});">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="list-details-title v1">
                                <div class="row">
                                    <div class="col-lg-7 col-md-8 col-sm-12">
                                        <div class="single-listing-title float-left">
                                            <h2>{{ $property->en_title }}<span class="btn v5">{{ $property->buyorrent }}</span></h2>
                                            <p><i class="fa fa-map-marker-alt"></i>{{ $property->area }}, {{ $property->city }}, egypt</p>
                                            <a href="#" class="property-author">
                                                <img src="{{ asset('images/logo.png') }}" alt="...">
                                                <span>Sweet Home</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-12">
                                        <div class="list-details-btn text-right sm-left">
                                            <div class="trend-open">
                                                <p><span style="font-size: 25px">Price: </span>{{ $property->price  }} L.E {{ $property->buyorrent == "For Sale" ? '' : '/ month' }}</p>
                                            </div>
                                            <div class="list-ratings">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star-half-alt"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Listing Details Hero ends-->
            <!--Listing Details Info starts-->

            <div class="single-property-details v1 mt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-12">
                            <div class="listing-desc-wrap mr-30">
                                <div id="list-menu" class="list_menu">
                                    <ul class="list-details-tab fixed_nav">
                                        <li class="nav-item active"><a href="#description" class="active">Description</a></li>
                                        <li class="nav-item"><a href="#gallery">Gallery</a></li>
                                        <li class="nav-item"><a href="#details">Details</a></li>
                                        <li class="nav-item"><a href="#book_tour">Book a Tour</a></li>
                                    </ul>
                                </div>
                                <!--Listing Details starts-->
                                <div class="list-details-wrap">
                                    <div id="description" class="list-details-section">
                                        <h4>Property Brief</h4>
                                        <div class="overview-content">
                                            <p class="mb-10">{{ $property->en_desc }}</p>
                                        </div>
                                        <div class="mt-40">
                                            <h4 class="list-subtitle">Location</h4>
                                            <ul class="listing-address">
                                                <li>Address : <span>{{ $property->area }}, {{ $property->city }}, egypt</span></li>

                                            </ul>
                                        </div>
                                    </div>

                                    
                                    <div id="gallery" class="list-details-section">
                                        <h4>Gallery</h4>
                                        <!--Carousel Wrapper-->
                                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails list-gallery pt-2" data-ride="carousel">
                                            <!--Slides-->
                                            <div class="carousel-inner" role="listbox">
                                                
                                                @foreach($property->images as $image)
                                                    
                                                    @if($image->first_image == 1)
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="{{ asset('properties_images') }}/{{$image->image_name }}" alt="slide">
                                                        </div>
                                                    @endif

                                                    @if($image->first_image == 0)
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('properties_images') }}/{{$image->image_name}}" alt="slide">
                                                        </div>
                                                    @endif

                                                @endforeach 
                                                
                                            </div>
                                            <!--Controls starts-->
                                            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                                <span class="lnr lnr-arrow-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                                <span class="lnr lnr-arrow-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                            <!--Controls ends-->
                                            <ol class="carousel-indicators  list-gallery-thumb">
                                                @foreach($property->images as $image)
                                                    <li data-target="#carousel-thumb" data-slide-to="1"><img class="img-fluid d-block w-100" src="{{ asset('properties_images') }}/{{$image->image_name}}" alt="..."></li>
                                                @endforeach

                                            </ol>
                                        </div>
                                        <!--/.Carousel Wrapper-->
                                    </div>

                                    <div id="details" class="list-details-section">
                                        <div class="mb-40">
                                            <h4>Property Details</h4>
                                            <ul class="property-info">
                                                <li>Property ID : <span>{{ $property->property_id }}</span></li>
                                                <li>Property Type : <span>{{ $property->type }}</span></li>
                                                <li>Property status : <span>{{ $property->buyorrent }}</span></li>
                                                <li>Property Price : <span>{{ $property->price  }} L.E {{ $property->buyorrent == "For Sale" ? '' : '/ month' }}</span></li>
                                                <li>Bedrooms: <span>{{ $property->bedrooms }}</span></li>
                                                <li>Bath: <span>{{ $property->bathrooms }}</span></li>
                                                <li>Garages: <span>{{ $property->parking }}</span></li>
                                            </ul>
                                        </div>

                                    </div>


                                    <div id="book_tour" class="list-details-section">
                                        <h4 class="list-details-title">Schedule a Tour</h4>
                                        <form class="tour-form" id="schedule_form" method="POST" action="/add_tour/{{ $property->id }}#book_tour"> 
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="datepicker-from" class="input-group date" data-date-format="yyyy-mm-dd">
                                                        <input class="form-control" name="tour_date" type="text" placeholder="Tour Date" required>
                                                        <span class="input-group-addon"><i class="lnr lnr-calendar-full"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                      <select class="form-control" id="exampleFormControlSelect1" name="tour_time">
                                                        <option>Select your tour time</option>
                                                        <option>09:00:00</option>
                                                        <option>10:00:00</option>
                                                        <option>11:00:00</option>
                                                        <option>12:00:00</option>
                                                        <option>13:00:00</option>
                                                        <option>14:00:00</option>
                                                        <option>15:00:00</option>
                                                        <option>16:00:00</option>
                                                        <option>17:00:00</option>
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control filter-input" name="name" placeholder="Your name" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control filter-input" name="phone" placeholder="Your Phone" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control filter-input" name="email" placeholder="Your email" required>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <textarea class="contact-form__textarea mb-25" name="message" id="comment" placeholder="Your Message" required></textarea>
                                                    <input class="btn v3" type="submit" name="submit-contact" id="submit_contact" value="Submit">
                                                </div>
                                            </div>
                                        </form>
                                        @if(count($errors))  
                                          
                                        <div class="alert alert-danger mt-5" role="alert">
                                            @foreach ($errors->all() as $error) 
                                              
                                                *{{ $error }}<br>

                                            @endforeach
                                        </div>
                                        @endif
                                        @if (session()->has('success'))
                                            <div class="alert alert-success mt-5">
                                                <ul>
                                                    <li>{{ session()->get('success') }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div id="reviews" class="list-details-section mt-10" style="display: none">
                                        <h4>Reviews <span>(2)</span></h4>
                                        <div class="review-box comment-box">

                                            <form class="contact-form" id="leave-review">
                                                <h4 class="contact-form__title">
                                                    Review This Property
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-7 col-12">
                                                        <p class="contact-form__rate">
                                                            Your rating for this listing:
                                                        </p>
                                                        <p class="contact-form__rate-bx" onclick="created()">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </p>
                                                        <p class="contact-form__rate-bx-show">
                                                            <span class="rate-actual" id="rate-actual">0</span> / 5
                                                            <input type="text" id="rating_stars" name="rating_stars" >
                                                        </p>
                                                    </div>
                                                </div>

                                                <input class="btn v3" type="submit" name="submit-contact" value="Review">
                                            </form>

                                            <script type="text/javascript">
                                                document.addEventListener('DOMContentLoaded', created);
                                                
                                                function created(){
                                                    console.log($("#rate-actual").text());
                                                    $("#rating_stars").val($("#rate-actual").text());
                                                }
                                                
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div id="list-sidebar" class="listing-sidebar">
                                <div class="widget">
                                    <img src="{{ asset('images/logo.png') }}">
                                    <li class="row recent-list">
                                        <div class="col-lg-5 col-4">
                                            <div class="entry-img">
                                                <p>Company Name</p>
                                                <p>Price</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-8 no-pad-left">
                                            <div class="entry-text">
                                                <div class="property-location">
                                                    <p>: SweetHome</p>
                                                </div>
                                                <div class="trend-open">
                                                    <p>: {{ $property->price  }} L.E {{ $property->buyorrent == "For Sale" ? '' : '/ month' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                    <li class="row recent-list">
                                        <div class="col-lg-5 col-4">
                                            <p class="btn btn-primary">Call Us Now</p>
                                        </div>
                                        <div class="col-lg-7 col-8 no-pad-left">
                                            <div class="entry-text">
                                                <h4 class="entry-title">Avalibale 24/7</h4>
                                                <div class="property-location">
                                                    <i class="fas fa-phone"></i>
                                                    <p>01155522245</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Listing Details Info ends-->

        </div>
        
        
    </div>
    <!--Page Wrapper ends-->
@endsection   