@extends('admin.admin_master')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-12 mt-5">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session('success')}}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <h2 class="display-6">Edit Contact</h2>
                <form action="{{url('update/contact/'.$contact_edit->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Email</label> <br>
                        <input name="email" value="{{$contact_edit->email}}" class="form-control" id="name" type="email">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Address</label>
                      <textarea name="address" value="" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contact_edit->address}}</textarea>
                      @error('address')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Phone Number</label> <br>
                        <input name="phone" value="{{$contact_edit->phone}}" class="form-control" id="name" type="number">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-info">Update Contact</button>
                  </form>

            </div>
    </div>
</div>
@endsection