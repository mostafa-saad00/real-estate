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
                            <h2 class="pageheader-title">Edit contact info: </h2>
                            
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
			                    <form class="form-horizontal" method="POST" action="{{ route('update_contact_info') }}">
			                        {{ csrf_field() }}
			                        {{ method_field('PUT') }}

			                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
			                            <label for="phone" class="col-md-4 control-label">Phone</label>

			                            <div class="col-md-6">
			                                <input id="phone" type="number" class="form-control" name="phone" value="{{ $contact_info->phone }}" required autofocus>

			                                @if ($errors->has('phone'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('phone') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>



			                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                            <label for="email" class="col-md-4 control-label">Email</label>

			                            <div class="col-md-6">
			                                <input id="email" type="email" class="form-control" name="email" value="{{ $contact_info->email }}" required >

			                                @if ($errors->has('email'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('email') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
			                            <label for="website" class="col-md-4 control-label">Website</label>

			                            <div class="col-md-6">
			                                <input id="website" type="text" class="form-control" name="website" value="{{ $contact_info->website }}" required >

			                                @if ($errors->has('website'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('website') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('weekend') ? ' has-error' : '' }}">
			                            <label for="weekend" class="col-md-4 control-label">Weekend day</label>

			                            <div class="col-md-6">
			                                <input id="	weekend" type="text" class="form-control" name="weekend" value="{{ $contact_info->weekend }}" required >

			                                @if ($errors->has('weekend'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('weekend') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                  
			                        <div class="form-group{{ $errors->has('work_day_from') ? ' has-error' : '' }}">
			                            <label for="work_day_from" class="col-md-4 control-label">Start work day</label>

			                            <div class="col-md-6">
			                                <input id="work_day_from" type="text" class="form-control" name="work_day_from" value="{{ $contact_info->work_day_from }}" required >

			                                @if ($errors->has('work_day_from'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('work_day_from') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('work_day_to') ? ' has-error' : '' }}">
			                            <label for="work_day_to" class="col-md-4 control-label">End work day</label>

			                            <div class="col-md-6">
			                                <input id="work_day_to" type="text" class="form-control" name="work_day_to" value="{{ $contact_info->work_day_to }}" required >

			                                @if ($errors->has('work_day_to'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('work_day_to') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('work_time_from') ? ' has-error' : '' }}">
			                            <label for="work_time_from" class="col-md-4 control-label">Start work time</label>

			                            <div class="col-md-6">
			                                <input id="work_time_from" type="number" class="form-control" name="work_time_from" value="{{ $contact_info->work_time_from }}" required >

			                                @if ($errors->has('work_time_from'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('work_time_from') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>
			                       
			                       <div class="form-group{{ $errors->has('work_time_to') ? ' has-error' : '' }}">
			                           <label for="work_time_to" class="col-md-4 control-label">End work time</label>

			                           <div class="col-md-6">
			                               <input id="work_time_to" type="number" class="form-control" name="work_time_to" value="{{ $contact_info->work_time_to }}" required >

			                               @if ($errors->has('work_time_to'))
			                                   <span class="help-block">
			                                       <strong>{{ $errors->first('work_time_to') }}</strong>
			                                   </span>
			                               @endif
			                           </div>
			                       </div>

			                       <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
			                           <label for="location" class="col-md-4 control-label">Location</label>

			                           <div class="col-md-6">
			                               <input id="location" type="text" class="form-control" name="location" value="{{ $contact_info->location }}" required >

			                               @if ($errors->has('location'))
			                                   <span class="help-block">
			                                       <strong>{{ $errors->first('location') }}</strong>
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