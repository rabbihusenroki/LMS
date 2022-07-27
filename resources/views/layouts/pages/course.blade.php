@extends('layouts.home_master')
@section('home_content')
<!-- Banner Area Start -->
<div class="banner-area-wrapper">
    @foreach ($course_banners as $course_banner)
    <div class="banner-area text-center" style="background-image: url({{asset($course_banner->course_banner)}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>courses</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- Banner Area End -->
<!-- Course Start -->
<div class="course-area pt-150 pb-150">
    <div class="container">
        <div class="row">
            @foreach($courses as $course)
            <div class="col-lg-4 col-md-6">
                <div class="single-course mb-70">
                    <div class="course-img">
                        <a href="{{url('course/details/'.$course->id)}}"><img src="{{asset($course->image)}}" alt="course">
                            <div class="course-hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="course-content">
                        <h3><a href="{{url('course/details/'.$course->id)}}">{{ $course->title }}</a></h3>
                        <p>{{Str::limit($course->course_description,150)}}</p>
                        <a class="default-btn" href="{{url('course/details/'.$course->id)}}">enroll</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br><br><br>
        <span class="text-center">{{$courses->links()}}</span>
    </div>
</div>
<!-- Course End -->
@endsection