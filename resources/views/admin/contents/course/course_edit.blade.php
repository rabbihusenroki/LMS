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
            <div class="card-header">Edit Course</div>
            <div class="card-body">
            <form action="{{url('update/course/'.$course_edit->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="old_image" value="{{$course_edit->image}}">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Course Title</label>
                  <input type="text" name="title" value="{{$course_edit->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('title')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputText" class="form-label">Course Short Description</label>
                    <textarea name="course_description" value="" class="form-control" id="exampleInputText" cols="80" rows="3">{{$course_edit->course_description}}</textarea>
                    @error('course_description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                <div class="form-group mb-3">
                    <label for="exampleInputText" class="form-label">About Short Description</label>
                    <textarea name="about_description" value="" class="form-control" id="exampleInputText" cols="80" rows="3">{{$course_edit->about_description}}</textarea>
                    @error('about_description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleInputText" class="form-label">Apply Description</label>
                    <textarea name="apply_description" value="{{$course_edit->apply_description}}" class="form-control" id="exampleInputText" cols="80" rows="3"></textarea>
                    @error('apply_description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleInputText" class="form-label">Certificate Description</label>
                    <textarea name="certificate_description" value="{{$course_edit->certificate_description}}" class="form-control" id="exampleInputText" cols="80" rows="3"></textarea>
                    @error('certificate_description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleFormControlFile1">Please input course image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"><br>
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                <div class="form-group mb-3">
                    <img src="{{asset($course_edit->image)}}" style="width:300px; height:300px;" alt="">
                </div>
                <button type="submit" class="btn btn-info">Update Course</button>
            </form>
          </div>
        </div>
      </div> 
    </div>

@endsection