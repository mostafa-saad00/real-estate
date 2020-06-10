@extends('layouts.admin_master')


@section('content')



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
                            <h2 class="pageheader-title">Edit about us info: </h2>
                            
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
                            
                            <div class="card-body">
			                    <form class="form-horizontal" method="POST" action="{{ route('update_about_us') }}">
			                        {{ csrf_field() }}
			                        {{ method_field('PUT') }}


			                        

			                        <div class="form-group{{ $errors->has('youtube_url') ? ' has-error' : '' }}">
			                            <label for="youtube_url" class="col-md-4 control-label">Youtube video url</label>

			                            <div class="col-md-6">
			                                <input id="youtube_url" type="text" class="form-control" name="youtube_url" value="{{ $about_info->youtube_url }}" required >

			                                @if ($errors->has('youtube_url'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('youtube_url') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('header_1') ? ' has-error' : '' }}">
			                            <label for="header_1" class="col-md-4 control-label">Header 1</label>

			                            <div class="col-md-6">
			                                <input id="header_1" type="text" class="form-control" name="header_1" value="{{ $about_info->header_1 }}" required >

			                                @if ($errors->has('header_1'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('header_1') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>			                        

			                        <div class="form-group{{ $errors->has('header_2') ? ' has-error' : '' }}">
			                            <label for="header_2" class="col-md-4 control-label">Header 2</label>

			                            <div class="col-md-6">
			                                <input id="header_2" type="text" class="form-control" name="header_2" value="{{ $about_info->header_2 }}" required >

			                                @if ($errors->has('header_2'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('header_2') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>


			                        <div class="form-group{{ $errors->has('	text_1') ? ' has-error' : '' }}">
			                            <label for="	text_1" class="col-md-4 control-label">text 1</label>

			                            <div class="col-md-6">
			                                <textarea rows="4" cols="60" name="text_1" required>{{ $about_info->text_1 }}</textarea>

			                                @if ($errors->has('	text_1'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('	text_1') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>



			                        <div class="form-group{{ $errors->has('	why_choose_us_header') ? ' has-error' : '' }}">
			                            <label for="	why_choose_us_header" class="col-md-4 control-label">why choose us header</label>

			                            <div class="col-md-6">
			                                <input id="	why_choose_us_header" type="text" class="form-control" name="why_choose_us_header" value="{{ $about_info->	why_choose_us_header }}" required >

			                                @if ($errors->has('	why_choose_us_header'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('	why_choose_us_header') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>


			                        <div class="form-group{{ $errors->has('	why_choose_us_text') ? ' has-error' : '' }}">
			                            <label for="	why_choose_us_text" class="col-md-4 control-label">why choose us text</label>

			                            <div class="col-md-6">
			                                <textarea rows="4" cols="60" name="why_choose_us_text" required>{{ $about_info->why_choose_us_text }}</textarea>
			                                @if ($errors->has('	why_choose_us_text'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('	why_choose_us_text') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>


			                        <div class="form-group">
			                            <div class="col-md-6 col-md-offset-4">
			                                <button type="submit" class="btn btn-primary">
			                                    Save
			                                </button>
			                            </div>
			                        </div>
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
</div> 


@endsection