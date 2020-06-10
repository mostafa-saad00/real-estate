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
                            <h2 class="pageheader-title">Edit user: </h2>

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
			                    <form class="form-horizontal" method="POST" action="{{ route('admin_update_manager', $user->id) }}" enctype="multipart/form-data">
			                        {{ csrf_field() }}
			                        {{ method_field('PUT') }}
			                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			                            <label for="name" class="col-md-4 control-label">Name</label>

			                            <div class="col-md-6">
			                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

			                                @if ($errors->has('name'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('name') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

			                            <div class="col-md-6">
			                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

			                                @if ($errors->has('email'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('email') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			                            <label for="password" class="col-md-4 control-label">New Password</label>

			                            <div class="col-md-6">
			                                <input id="password" type="password" class="form-control" name="password" required>

			                                @if ($errors->has('password'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('password') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group">
			                            <label for="password-confirm" class="col-md-4 control-label">Confirm New Password</label>

			                            <div class="col-md-6">
			                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
			                            </div>
			                        </div>

			                        <div class="form-group">
			                            <label for="roles" class="col-md-4 control-label">Roles</label>

			                            <div class="col-md-6">
			                            	<select class="form-control" name="roles">
			                            		<option>admin</option>
			                            		<option>super admin</option>
			                            	</select>

			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label for="photo" class="col-md-4 control-label">Upload photo:</label>

			                            <div class="col-md-6">
			                                <input type="file" class="form-control" name="photo"> 
			                                @if ($errors->has('photo'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('photo') }}</strong>
			                                    </span>
			                                @endif
			                            </div>
			                        </div>

			                        <div class="form-group">
			                            <div class="col-md-6 col-md-offset-4">
			                                <button type="submit" class="btn btn-primary">
			                                    Update
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