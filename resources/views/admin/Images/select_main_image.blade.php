@extends('layouts.admin_master')


@section('content')

@foreach($related_images as $image)

	<div>{{$image->image_name}}</div>
@endforeach



<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-10">
                
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-section" id="overview">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h2>Hint...</h2>
                                    <p class="lead">A selected image will be the first image in listing view.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="image-card">
                            <h3 class="section-title">Property Images</h3>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('admin_properties_images_store', ['id' => $property_id]) }}">
                    	{{ csrf_field() }}

                    	
                    	@foreach($related_images as $image)

	                    	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-lg-6 col-md-6 col-sm-12 col-12">
	                    	    <div class="card">
	                    	        <img class="img-fluid" src="{{ asset('properties_images') }}/{{$image->image_name}}" alt="Card image cap">
	                    	        <div class="card-body">
	                    	            <h3 class="card-title">Select this image</h3>
	                    	            <div class="form-check form-check-inline">
	                    	            	<input type="checkbox" name="image_id" value="{{ $image->id }}"  class="radio_change " onclick="radio_change()">
	                    	            	<label>click here</label>
	                    	            </div>
	                    	        </div>
	                    	    </div>
	                    	</div>

	                    @endforeach
	                    
	                    <button type="submit">save</button>
                    
                    </form>
                </div>
                <!-- ============================================================== -->
                <!-- end image cards  -->
                
                
               
                
                
                
                <!-- end card varience  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            
        </div>
    </div>

    <script type="text/javascript">
    	function radio_change()
    	{
    		$(".radio_change").change(function() {
    			
    		    $(".radio_change").prop('checked', false);
    		    $(this).prop('checked', true);
    		});
    	}
    	

    	
    	

    </script>	

@endsection