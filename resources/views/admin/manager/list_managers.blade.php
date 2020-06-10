@extends('layouts.admin_master')


@section('content')


<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Managers List</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Managers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Managers List</li>
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
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Managers Table</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($users as $user)
	                                    <tr>
	                                        <td>{{ $user->name }}</td>
	                                        <td>{{ $user->email }}</td>
	                                        <td>{{ $user->roles }}</td>
	                                        <td><button class="btn btn-danger" data-propertyid="{{ $user->id }}" data-toggle="modal" data-target="#{{$user->id}}">Delete</button></td> 
	                                    </tr>

	                                    <!-- Modal -->
	                                    <div class="modal fade" id="{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                      <div class="modal-dialog" role="document">
	                                        <div class="modal-content">
	                                          <div class="modal-header">
	                                            <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
	                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                              <span aria-hidden="true">&times;</span>
	                                            </button>
	                                          </div>
	                                          <form method="POST" action="{{ route('admin_destroy_manager', $user->id) }}">
	                                              {{ csrf_field() }}
	                                              {{ method_field('DELETE') }}

	                                              <div class="modal-body">
	                                                <p class="text-center">Are you sure you want to delete {{ $user->name }}? </p>
	                                                <!-- i will put property_id data using jquery in admin_master.blade.php -->
	                                                <input type="hidden" name="property_id" id="property_id" value="">
	                                                
	                                              </div>

	                                              <div class="modal-footer">
	                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	                                                <button type="submit" class="btn btn-danger">Yes, delete</button>
	                                              </div>
	                                          </form>
	                                        </div>
	                                      </div>
	                                    </div>



                                    @endforeach
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>


@endsection