@extends('layouts.home_master')
@section('home_content')
<!-- Banner Area Start -->
<div class="banner-area-wrapper">
    @foreach ($teacher_banners as $teacher_banner)
    <div class="banner-area text-center" style="background-image: url({{asset($teacher_banner->teacher_banner)}});">	
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>our teachers</h2> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>    
<!-- Banner Area End -->
<!-- Teacher Start -->
<div class="teacher-area pt-150 pb-105">
    <div class="container">
        <div class="row">
            @foreach($teachers as $teacher)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-teacher mb-45">
                    <div class="single-teacher-img">
                        <a href="{{url('teacher/details/'.$teacher->id)}}"><img style="width:270px; height:270px;" src="{{asset($teacher->image)}}" alt="teacher"></a>  
                    </div>
                    <div class="single-teacher-content text-center">
                        <h2><a href="{{url('teacher/details/'.$teacher->id)}}">{{ $teacher->name }}</a></h2>
                        <h4>{{ $teacher->position }}</h4>
                        <ul>
                            <li><a href="{{asset('https://www.facebook.com/tahsin.rocky.5')}}"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a href="{{asset('https://www.facebook.com/tahsin.rocky.5')}}"><i class="zmdi zmdi-pinterest"></i></a></li>
                            <li><a href="{{asset('https://www.facebook.com/tahsin.rocky.5')}}"><i class="zmdi zmdi-vimeo"></i></a></li>
                            <li><a href="{{asset('https://www.facebook.com/tahsin.rocky.5')}}"><i class="zmdi zmdi-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br><br><br>
        <span class="text-center">{{$teachers->links()}}</span>
    </div>
</div>
<!-- Teacher End -->
@endsection