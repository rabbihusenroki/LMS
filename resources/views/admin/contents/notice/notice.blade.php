@extends('admin.admin_master')
@section('content')
<div class="row">
  <div class="col-md-6 d-flex justify-content-start">
      <div class="page-title-box">
          <h4 class="page-title">All Notices</h4>
      </div>
  </div>
  <div class="clearfix"></div>
</div>

<div class="py-12">
  <div class="container">
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col" width="10%" >Serial</th>
      <th scope="col" width="25%">Event Date</th>
      <th scope="col" width="45%">Description</th>
      <th scope="col" width="20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($notices as $notice)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$notice->event_date}}</td>
      <td>{{Str::limit($notice->description,100)}}</td>
      <td>
          <a href="{{url('edit/notice/'.$notice->id)}}" class=" text-primary btn btn-info">Edit</a>
          <a href="{{url('delete/notice/'.$notice->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection






  