@extends('admin.admin_master')
@section('content')
<div class="row">
  <div class="col-md-6 d-flex justify-content-start">
      <div class="page-title-box">
          <h4 class="page-title">Subscriber</h4>
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
      <th scope="col" width="20%" >Serial</th>
      <th scope="col" width="60%">Email</th>
      <th scope="col" width="20%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($subscribers as $subscriber)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$subscriber->email}}</td>
      <td>
          <a href="{{url('delete/subscriber/'.$subscriber->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection






  