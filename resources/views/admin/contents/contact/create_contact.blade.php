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
                <h2 class="display-6">Add Contact</h2>
                <form action="{{route('store.contact')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Address</label>
                      <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      @error('address')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-info">Create Contact</button>
                  </form>

            </div>
    </div>
</div>
@endsection