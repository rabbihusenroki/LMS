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
            <div class="card-header">Create Banner</div>
            <div class="card-body">
              <form action="{{route('store.banner')}}" method="POST" enctype="multipart/form-data">
                @csrf
            
                  <div class="form-group mb-3">
                  <label for="exampleFormControlFile1">Please input about image</label>
                  <input type="file" name="about_banner" class="form-control-file" id="exampleFormControlFile1"><br>
                  @error('about_banner')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                  <button type="submit" class="btn btn-info">Create About Banner</button>
              </form>
              <form action="{{route('store.coursebanner')}}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-group mb-3">
                    <label for="exampleFormControlFile1">Please input course image</label>
                    <input type="file" name="course_banner" class="form-control-file" id="exampleFormControlFile1"><br>
                    @error('course_banner')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                  <button type="submit" class="btn btn-info">Create Course Banner</button>
              </form>
              <form action="{{route('store.teacherbanner')}}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-group mb-3">
                    <label for="exampleFormControlFile1">Please input teacher image</label>
                    <input type="file" name="teacher_banner" class="form-control-file" id="exampleFormControlFile1"><br>
                    @error('teacher_banner')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                  <button type="submit" class="btn btn-info">Create Teacher Banner</button>
              </form>
              <form action="{{route('store.blogbanner')}}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-group mb-3">
                    <label for="exampleFormControlFile1">Please input blog image</label>
                    <input type="file" name="blog_banner" class="form-control-file" id="exampleFormControlFile1"><br>
                    @error('blog_banner')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                  <button type="submit" class="btn btn-info">Create Blog Banner</button>
              </form>
              <form action="{{route('store.contactbanner')}}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-group mb-3">
                    <label for="exampleFormControlFile1">Please input contact image</label>
                    <input type="file" name="contact_banner" class="form-control-file" id="exampleFormControlFile1"><br>
                    @error('contact_banner')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                  <button type="submit" class="btn btn-info">Create Contact Banner</button>
              </form>
          </div>
        </div>
      </div> 
    </div>
@endsection