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
            <div class="card-header">Edit Post</div>
            <div class="card-body">
            <form action="{{url('update/blog/'.$blog_edit->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="old_image" value="{{$blog_edit->image}}">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Post Title</label>
                  <input type="text" name="title" value="{{$blog_edit->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('title')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputText" class="form-label">Post Description</label>
                    <textarea name="blog_description" value="{{$blog_edit->blog_description}}" class="form-control" id="exampleInputText" cols="30" rows="3"></textarea>
                    @error('blog_description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                
                  <div class="form-group mb-3">
                    <label for="exampleFormControlFile1">Please input post image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"><br>
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                <div class="form-group mb-3">
                    <img src="{{asset($blog_edit->image)}}" style="width:300px; height:300px;" alt="">
                </div>
                <button type="submit" class="btn btn-info">Update Post</button>
            </form>
          </div>
        </div>
      </div> 
    </div>

@endsection