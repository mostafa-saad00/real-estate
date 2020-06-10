@extends('layouts.admin_master')


@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-10">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" id="top">
                            <h2 class="pageheader-title">Add new property </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link ">Property</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('admin_add_property') }}" class="breadcrumb-link">Add property</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- basic form  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="card">
                            <h5 class="card-header">Fill all inputs</h5>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin_store_property') }}" enctype="multipart/form-data">
                                	{{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Property title (English)</label>
                                        <input id="Property_title_E" name="en_title" type="text" class="form-control">
                                        @if ($errors->has('en_title'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('en_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Property title (Arabic)</label>
                                        <input id="Property_title_A" name="ar_title" type="text" class="form-control">
                                        @if ($errors->has('ar_title'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('ar_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="input-select">Select property status</label>
                                        <select class="form-control" id="select_property_status" name="buyorrent">
                                            <option>For sale</option>
                                            <option>For rent</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-select">Select city</label>
                                        <select class="form-control" id="select_city" name="city">
                                            <option>Cairo</option>
                                            <option>Giza</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-select">Select area</label>
                                        <select class="form-control" id="select_area" name="area">
                                            <option>Tagmoaa Al Khames</option>
                                            <option>Nasr City</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-select">Select property type</label>
                                        <select class="form-control" id="select_property_type" name="type">
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
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Price</label>
                                        <input id="pricex" name="price" type="number" class="form-control">
                                        @if ($errors->has('price'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('price') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description (English)</label>
                                        <textarea class="form-control" id="Description_E" rows="3" name="en_desc"></textarea>
                                        @if ($errors->has('en_desc'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('en_desc') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description (Arabic)</label>
                                        <textarea class="form-control" name="ar_desc" id="Description_A" rows="3"></textarea>
                                        @if ($errors->has('ar_desc'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('ar_desc') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Property ID</label>
                                        <input id="Property ID" name="property_id" type="text" class="form-control">
                                        @if ($errors->has('property_id'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('property_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Number of Bedrooms</label>
                                        <input id="Number of Bedrooms" type="number" class="form-control" name="bedrooms">
                                        @if ($errors->has('bedrooms'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('bedrooms') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Number of Bathrooms</label>
                                        <input id="Number of Bathrooms" type="number" class="form-control" name="bathrooms">
                                        @if ($errors->has('bathrooms'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('bathrooms') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Number of Garages</label>
                                        <input id="Number of Garages" type="number" class="form-control" name="parking">
                                        @if ($errors->has('parking'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('parking') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Total Area</label>
                                        <input id="pricex" type="number" class="form-control" name="total_area">
                                        @if ($errors->has('total_area'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('total_area') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                    	<label for="inputText4" class="col-form-label">Upload photos: &nbsp;</label>
	                                    <input type="file" name="files[]" multiple id="gallery-photo-add">
	                                    @if ($errors->has('files'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('files') }}</strong>
                                            </span>
                                        @endif
	                                    <div class="gallery mt-3"></div>
                                    </div>
                                    

                                    

                                    <button type="submit" class="btn btn-primary" style="margin-top:10px">Next</button>



                                    
                                </form>

                                

                            </div>

                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
               
              
               
               
                
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->

        </div>
    </div> 
    <!-- ============================================================== -->
    <script type="text/javascript">
    	$(function() {
    	    // Multiple images preview in browser
    	    var imagesPreview = function(input, placeToInsertImagePreview) {
    	    	
    	        if (input.files) {
    	            var filesAmount = input.files.length;


    	            for (i = 0; i < filesAmount; i++) {
    	                var reader = new FileReader();
    	                console.log(input.files[i].name);
    	                reader.onload = function(event) {
    	                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
    	                }

    	                reader.readAsDataURL(input.files[i]);
    	            }
    	        }

    	    };

    	    $('#gallery-photo-add').on('change', function() {
    	        imagesPreview(this, 'div.gallery');
    	    });
    	});
    </script>


@endsection