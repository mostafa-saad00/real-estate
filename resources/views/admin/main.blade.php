@extends('layouts.adminmaster')

@section('title', 'DashBoard')


@section('content')
<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="recent-activity">


                    <router-view></router-view>

                    <div class="d-none">asdsa</div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection