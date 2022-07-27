@extends('admin.admin_master')
@section('content')
<div class="row">
  <div class="col-md-6 d-flex justify-content-start">
      <div class="page-title-box">
          <h4 class="page-title">Contact</h4>
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
      <th scope="col" width="5%" >Serial</th>
      <th scope="col" width="15%">Name</th>
      <th scope="col" width="6%">Email</th>
      <th scope="col" width="6%">Phone</th>
      <th scope="col" width="17%">Subject</th>
      <th scope="col" width="26%">Message</th>
      <th scope="col" width="10%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($messages as $message)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$message->name}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->phone}}</td>
      <td>{{$message->subject}}</td>
      <td>{{$message->message}}</td>
      <td>
          <a href="{{url('delete/message/'.$message->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection






  