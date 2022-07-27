@extends('admin.admin_master')
@section('content')
<div class="row">
  <div class="col-md-6 d-flex justify-content-start">
      <div class="page-title-box">
          <h4 class="page-title">All Teacher</h4>
      </div>
  </div>
  <div class="clearfix"></div>
</div>

<div class="py-12">
  <div class="container">
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col" width="5%" >Serial</th>
      <th scope="col" width="25%">Name</th>
      <th scope="col" width="35%">Position</th>
      <th scope="col" width="20%">Image</th>
      <th scope="col" width="15%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($teachers as $teacher)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$teacher->name}}</td>
      <td>{{$teacher->position}}</td>
      <td><img src="{{asset($teacher->image)}}" style="width:70px; height:40px;" alt=""></td>
      <td>
          <a href="{{url('edit/teacher/'.$teacher->id)}}" class=" text-primary btn btn-info">Edit</a>
          <a href="{{url('delete/teacher/'.$teacher->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection






  