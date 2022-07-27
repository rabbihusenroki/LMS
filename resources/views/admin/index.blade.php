@extends('admin.admin_master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">The Visual</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<!-- end page title end breadcrumb -->
<div class="row">
    <!-- Column -->
    <div class="col-sm-12 col-md-6 col-xl-3">
        <div class="card bg-danger m-b-30">
            <div class="card-body">
                <div class="d-flex row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-school"></i>
                        </div>
                    </div>
         
                    <div class="col-8 ml-auto align-self-center text-center">
                        <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">{{$totalcourse->count()}}</h5>
                            <p class="mb-0 ">Total Courses</p>
                        </div>
                    </div>
           
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-info m-b-30">
            <div class="card-body">
                <div class="d-flex row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-account-multiple-plus"></i>
                        </div>
                    </div>
                    <div class="col-8 text-center ml-auto align-self-center">
                        <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">{{$totaluser->count()}}</h5>
                            <p class="mb-0 ">Total Users</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-success m-b-30">
            <div class="card-body">
                <div class="d-flex row">
                    <div class="col-3 align-self-center">
                        <div class="round ">
                            <i class="mdi mdi-human-male"></i>
                        </div>
                    </div>
                    <div class="col-8 ml-auto align-self-center text-center">
                        <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">{{$totalteacher->count()}}</h5>
                            <p class="mb-0 ">Total Teachers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-primary m-b-30">
            <div class="card-body">
                <div class="d-flex row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-calculator"></i>
                        </div>
                    </div>
                    <div class="col-8 ml-auto align-self-center text-center">
                        <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">{{$totalmessage->count()}}</h5>
                            <p class="mb-0">Student Message</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
@endsection