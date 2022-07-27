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
            <div class="card-header">Edit Teacher Profile</div>
            <div class="card-body">
            <form action="{{url('update/teacher/'.$teacher_edit->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="old_image" value="{{$teacher_edit->image}}">
              <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Teacher Name</label>
                <input type="text" name="name" value="{{$teacher_edit->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Teacher Position</label>
                  <input type="text" name="position" value="{{$teacher_edit->position}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('position')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              <div class="form-group mb-3">
                  <label for="exampleInputText" class="form-label">Teacher Short Description</label>
                  <textarea name="teacher_description" value=" " class="form-control" id="exampleInputText" cols="30" rows="3">{{$teacher_edit->description}}</textarea>
                  @error('teacher_description')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Teacher Degree</label>
                  <input type="text" name="degree" value="{{$teacher_edit->degree}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('degree')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Teacher Experience</label>
                  <input type="text" name="experience" value="{{$teacher_edit->experience}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('experience')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Teacher Hobbies</label>
                  <input type="text" name="hobbies" value="{{$teacher_edit->hobbies}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('hobbies')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Teacher Faculty</label>
                  <input type="text" name="faculty" value="{{$teacher_edit->faculty}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('faculty')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Teacher Mail</label>
                  <input type="text" name="mail" value="{{$teacher_edit->mail}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('mail')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Teacher Number</label>
                  <input type="text" name="call" value="{{$teacher_edit->call}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('call')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                
                  
                  <div class="form-group mb-3">
                    <label for="exampleFormControlFile1">Please input teacher image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"><br>
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                <div class="form-group mb-3">
                    <img src="{{asset($teacher_edit->image)}}" style="width:300px; height:300px;" alt="">
                </div>
                <button type="submit" class="btn btn-info">Update Teacher Profile</button>
            </form>
          </div>
        </div>
      </div> 
    </div>

@endsection