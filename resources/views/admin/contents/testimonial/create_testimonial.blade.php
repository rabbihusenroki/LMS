@extends('admin.admin_master')
@section('content')
<div class="py-12">
    <div class="container">
      <div class="row mb-5" style="margin-top: 60px">
        <div class="col-md-12">
          <div class="card">
              @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
            <div class="card-header">Create Testimonial</div>
            <div class="card-body">
            <form action="{{route('store.testimonial')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Study At</label>
                <input type="text" name="study" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('study')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
                <div class="form-group mb-3">
                    <label for="exampleInputText" class="form-label">Testimonial Short Description</label>
                    <textarea name="description" class="form-control" id="exampleInputText" cols="30" rows="3"></textarea>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
               
                <div class="form-group mb-3">
                  <label for="exampleFormControlFile1">Please input testimonial image</label>
                  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"><br>
                  @error('image')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="exampleFormControlFile1">Please select background image</label>
                  <input type="file" name="bg_image" class="form-control-file" id="exampleFormControlFile1"><br>
                  @error('bg_image')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
               
                <button type="submit" class="btn btn-info">Create Testimonial</button>
            </form>
          </div>
        </div>
      </div> 
    </div>
@endsection