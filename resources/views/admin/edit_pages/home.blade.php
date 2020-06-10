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
                            <h2 class="pageheader-title">Edit home page: </h2>
                            
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
			                    <form class="form-horizontal" method="POST" action="{{ route('update_home') }}">
			                        {{ csrf_field() }}
			                        {{ method_field('PUT') }}

			                        <h5 class="card-header">Background image text:</h5><br>
			                        <div class="form-group{{ $errors->has('text_1') ? ' has-error' : '' }}">
			                            <label for="text_1" class="col-md-4 control-label">Text 1</label>

			                            <div class="col-md-6">
			                                <input id="text_1" type="text" class="form-control" name="text_1" value="{{ $home_info->text_1 }}" required autofocus>

			                                @if ($errors->has('text_1'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('text_1') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>



			                        <div class="form-group{{ $errors->has('text_2') ? ' has-error' : '' }}">
			                            <label for="text_2" class="col-md-4 control-label">Text 2</label>

			                            <div class="col-md-6">
			                                <input id="text_2" type="text" class="form-control" name="text_2" value="{{ $home_info->text_2 }}" required >

			                                @if ($errors->has('text_2'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('text_2') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>



			                        <div class="form-group{{ $errors->has('text_3') ? ' has-error' : '' }}">
			                            <label for="text_3" class="col-md-4 control-label">Text 3</label>
			                            <div class="col-md-6">
			                                <textarea rows="4" cols="60" name="text_3" required>{{ $home_info->text_3 }}</textarea>
			                                @if ($errors->has('text_3'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('text_3') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        
			                        <h5 class="card-header">Why choose us?</h5><br>
			                        <div class="form-group{{ $errors->has('section_1_p') ? ' has-error' : '' }}">
			                            <label for="section_1_p" class="col-md-4 control-label">section 1</label>

			                            <div class="col-md-6">
			                                <input id="section_1_p" type="text" class="form-control" name="section_1_p" value="{{ $home_info->section_1_p }}" required >

			                                @if ($errors->has('section_1_p'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('section_1_p') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group{{ $errors->has('section_1_t') ? ' has-error' : '' }}">
			                            <div class="col-md-6">
			                                <textarea rows="4" cols="60" name="section_1_t" required>{{ $home_info->section_1_t }}</textarea>
			                                @if ($errors->has('section_1_t'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('section_1_t') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>




			                        <div class="form-group{{ $errors->has('section_2_p') ? ' has-error' : '' }}">
			                            <label for="section_2_p" class="col-md-4 control-label">section 2</label>

			                            <div class="col-md-6">
			                                <input id="section_2_p" type="text" class="form-control" name="section_2_p" value="{{ $home_info->section_2_p }}" required >

			                                @if ($errors->has('section_2_p'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('section_2_p') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group{{ $errors->has('section_2_t') ? ' has-error' : '' }}">
			                            <div class="col-md-6">
			                                <textarea rows="4" cols="60" name="section_2_t" required>{{ $home_info->section_2_t }}</textarea>
			                                @if ($errors->has('section_2_t'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('section_2_t') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>



			                        <div class="form-group{{ $errors->has('section_3_p') ? ' has-error' : '' }}">
			                            <label for="section_3_p" class="col-md-4 control-label">section 3</label>

			                            <div class="col-md-6">
			                                <input id="section_3_p" type="text" class="form-control" name="section_3_p" value="{{ $home_info->section_3_p }}" required >

			                                @if ($errors->has('section_3_p'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('section_3_p') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('section_3_t') ? ' has-error' : '' }}">
			                            <div class="col-md-6">
			                                <textarea rows="4" cols="60" name="section_3_t" required>{{ $home_info->section_3_t }}</textarea>
			                                @if ($errors->has('section_3_t'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('section_3_t') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                       


			                        <div class="form-group{{ $errors->has('section_4_p') ? ' has-error' : '' }}">
			                            <label for="section_4_p" class="col-md-4 control-label">section 4</label>

			                            <div class="col-md-6">
			                                <input id="section_4_p" type="text" class="form-control" name="section_4_p" value="{{ $home_info->section_4_p }}" required >

			                                @if ($errors->has('section_4_p'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('section_4_p') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('section_4_t') ? ' has-error' : '' }}">
			                            <div class="col-md-6">
			                                <textarea rows="4" cols="60" name="section_4_t" required>{{ $home_info->section_4_t }}</textarea>
			                                @if ($errors->has('section_4_t'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('section_4_t') }}</strong>
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