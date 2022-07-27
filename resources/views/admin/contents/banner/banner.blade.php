@extends('admin.admin_master')
@section('content')
<div class="row">
  <div class="col-md-6 d-flex justify-content-start">
      <div class="page-title-box">
          <h4 class="page-title">All Banner</h4>
      </div>
  </div>
  <div class="clearfix"></div>
</div>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('success')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="py-12">
  <div class="container">
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col" width="10%" >Serial</th>
      <th scope="col" width="20%">Banner</th>
      <th scope="col" width="50%">Image</th>
      <th scope="col" width="20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($banners as $banner)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>About</td>
      <td><img src="{{ asset($banner->about_banner) }}" style="width:70px; height:40px" alt=""></td>
      <td>
          <a href="{{url('delete/banner/'.$banner->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col" width="10%" >Serial</th>
      <th scope="col" width="20%">Banner</th>
      <th scope="col" width="50%">Image</th>
      <th scope="col" width="20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($course_banners as $banner)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>Course</td>
      <td><img src="{{ asset($banner->course_banner) }}" style="width:70px; height:40px" alt=""></td>
      <td>
          <a href="{{url('delete/banner/'.$banner->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col" width="10%" >Serial</th>
      <th scope="col" width="20%">Banner</th>
      <th scope="col" width="50%">Image</th>
      <th scope="col" width="20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($teacher_banners as $banner)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>Teacher</td>
      <td><img src="{{ asset($banner->teacher_banner) }}" style="width:70px; height:40px" alt=""></td>
      <td>
          <a href="{{url('delete/banner/'.$banner->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col" width="10%" >Serial</th>
      <th scope="col" width="20%">Banner</th>
      <th scope="col" width="50%">Image</th>
      <th scope="col" width="20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($blog_banners as $banner)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>Blog</td>
      <td><img src="{{ asset($banner->blog_banner) }}" style="width:70px; height:40px" alt=""></td>
      <td>
          <a href="{{url('delete/banner/'.$banner->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col" width="10%" >Serial</th>
      <th scope="col" width="20%">Banner</th>
      <th scope="col" width="50%">Image</th>
      <th scope="col" width="20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($contact_banners as $banner)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>Contact</td>
      <td><img src="{{ asset($banner->contact_banner) }}" style="width:70px; height:40px" alt=""></td>
      <td>
          <a href="{{url('delete/banner/'.$banner->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection






  