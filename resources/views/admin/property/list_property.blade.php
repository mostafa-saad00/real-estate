@extends('layouts.admin_master')


@section('content')

<link rel="icon" type="image/png" href="#" />
<!-- google fonts-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
<!-- Plugins CSS -->
<link href="{{ asset('css/plugin.css') }}" rel="stylesheet" />
<!-- style CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Tables</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">property</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Properties list</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
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
                                    <button class="btn btn-danger" data-propertyid="{{ $property->id }}" data-toggle="modal" data-target="#{{$property->id}}">Delete this property</button>
                                    <a href="{{ url('/properties-list') }}/{{ $property->id }}" class="btn v7 mt-3">Edit this property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>


            </div>

            <!-- Modal -->
            <div class="modal fade" id="{{ $property->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="POST" action="{{ route('admin_destroy_property', $property->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <div class="modal-body">
                        <p class="text-center">Are you sure you want to delete this property?</p>
                        <!-- i will put property_id data using jquery in admin_master.blade.php -->
                        <input type="hidden" name="property_id" id="property_id" value="">
                        
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes, delete</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>



            @endforeach
            <!-- ============================================================== -->
        </div>
        
        
        
        
    </div>





  

@endsection