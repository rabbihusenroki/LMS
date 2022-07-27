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
                <h2 class="display-6">Edit Notice</h2>
                <form action="{{url('update/notice/'.$notice_edit->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="datepicker">Select Event Date</label> <br>
                        <input name="event_date" value="{{$notice_edit->event_date}}" class="form-control" id="datepicker" type="text" id="datepicker">
                        @error('event_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Event Description</label>
                      <textarea name="description" value="{{$notice_edit->description}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      @error('description')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-info">Update Notice</button>
                  </form>

            </div>
    </div>
</div>
@endsection