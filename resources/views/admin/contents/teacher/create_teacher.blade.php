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
            <div class="card-header">Create Teacher Profile</div>
            <div class="card-body">
            <form action="{{route('store.teacher')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Teacher Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('name')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Teacher Position</label>
                    <input type="text" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('position')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                <div class="form-group mb-3">
                    <label for="exampleInputText" class="form-label">Teacher Short Description</label>
                    <textarea name="teacher_description" class="form-control" id="exampleInputText" cols="30" rows="3"></textarea>
                    @error('teacher_description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Teacher Degree</label>
                    <input type="text" name="degree" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('degree')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Teacher Experience</label>
                    <input type="text" name="experience" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('experience')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Teacher Hobbies</label>
                    <input type="text" name="hobbies" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('hobbies')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Teacher Faculty</label>
                    <input type="text" name="faculty" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('faculty')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Teacher Mail</label>
                    <input type="text" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('mail')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Teacher Number</label>
                    <input type="text" name="call" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('call')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleFormControlFile1">Please input Teacher image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"><br>
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
               
                <button type="submit" class="btn btn-info">Create Teacher Profile</button>
            </form>
          </div>
        </div>
      </div> 
    </div>
@endsection