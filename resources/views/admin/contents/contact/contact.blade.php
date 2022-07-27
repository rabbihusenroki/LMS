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

<div class="py-12">
  <div class="container">
<table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col" width="5%" >Serial</th>
      <th scope="col" width="25%">Email</th>
      <th scope="col" width="45%">Address</th>
      <th scope="col" width="10%">Phone</th>
      <th scope="col" width="15%">Action</th>
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($contacts as $contact)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$contact->email}}</td>
      <td>{{$contact->address}}</td>
      <td>{{$contact->phone}}</td>
      <td>
          <a href="{{url('edit/contact/'.$contact->id)}}" class=" text-primary btn btn-info">Edit</a>
          <a href="{{url('delete/contact/'.$contact->id)}}" class=" text-primary btn btn-info">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection






  