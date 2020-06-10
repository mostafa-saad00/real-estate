@extends('layouts.master')

@section('title', 'Contact-Us')
@section('content')


    <!--Breadcrumb section starts-->
    <div class="breadcrumb-section bg-h" style="background-image: url(images/logo.png)">
        <div class="overlay op-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="breadcrumb-menu">
                        <h2>Contact us</h2>
                        <span><a href="{{ url('/') }}">Home</a></span>
                        <span>Contact us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section ends-->

    <!--Contact info starts -->
    <div class="contact-info section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Corporate Office</h4>
                        <p>{{ $contact_info->location }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item">
                        <i class="fas fa-phone-alt"></i>
                        <h4>Direct Contact</h4>
                        <p><strong>Phone : </strong>{{ $contact_info->phone }}</p>
                        <p><strong>Email : </strong>{{ $contact_info->email }}</p>
                        <p><strong>Website : </strong>{{ $contact_info->website }}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item">
                        <i class="fas fa-business-time"></i>
                        <h4>Business Hours</h4>
                        <p><strong>{{ $contact_info->weekend }} : </strong> Closed</p>
                        <p><strong>{{ $contact_info->work_day_from }}-{{ $contact_info->work_day_to }} : </strong>{{ $contact_info->work_time_from }}AM - {{ $contact_info->work_time_to }}PM</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact info ends -->
    <!--Contact section starts-->
    <div class="contact-section v1 mt-10 mb-120">
        <div class="container">
            <div class="contact-map v1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"  width="650" height="500"  style="border:0"></iframe>
            </div>
            <div class="row">
                <div class="col-lg-5 offset-lg-6 col-md-12" id="contact_us_form">
                    <div class="section-title v2 mb-10">
                        <h2>Write to us</h2>
                    </div>
                    <form action="/contact-us#contact_us_form" method="POST">
                    	{{ csrf_field() }}
                        <div class="form-control-wrap">
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
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Name*" name="name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="number" placeholder="Number*" name="number">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email_address" placeholder="Email*" name="email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="8" name="message" id="comment" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn v7">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Contact section ends-->
    <!-- Scroll to top starts-->
    <span class="scrolltotop"><i class="lnr lnr-arrow-up"></i></span>
    <!-- Scroll to top ends-->
</div>
<!--Page Wrapper ends-->

@endsection