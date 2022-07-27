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
            <div class="card-header">Edit Testimonial</div>
            <div class="card-body">
            <form action="{{url('update/testimonial/'.$test_edit->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="old_image" value="{{$test_edit->image}}">
              <input type="hidden" name="old_bg_image" value="{{$test_edit->bg_image}}">
              <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" value="{{$test_edit->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Study At</label>
                <input type="text" name="study" value="{{$test_edit->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('study')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
                <div class="form-group mb-3">
                    <label for="exampleInputText" class="form-label">Testimonial Short Description</label>
                    <textarea name="description" value="{{$test_edit->description}}" class="form-control" id="exampleInputText" cols="30" rows="3"></textarea>
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
                <div class="form-group mb-3">
                    <img src="{{asset($test_edit->image)}}" style="width:300px; height:300px;" alt="">
                </div>
                <div class="form-group mb-3">
                  <img src="{{asset($test_edit->bg_image)}}" style="width:300px; height:300px;" alt="">
                </div>
                <button type="submit" class="btn btn-info">Update Testimonial</button>
            </form>
          </div>
        </div>
      </div> 
    </div>

@endsection