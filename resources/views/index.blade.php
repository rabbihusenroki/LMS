@php
    use App\Models\Choose;
    use App\Models\Course;
    use App\Models\Testimonial;
    use App\Models\Blog;
    // $today = Carbon\Carbon::parse(today()->toDateString());
    // $sliders = DB::table('slides')->where('created_at', '>=', $today)
    //                         ->inRandomOrder()
    //                         ->take(3)
    //                         ->get();
    $chooses = Choose::latest()->get();
    $courses = Course::latest()->inRandomOrder()->take(3)->get();
    $testimonials = Testimonial::latest()->inRandomOrder()->take(3)->get();
    $blogs = Blog::latest()->inRandomOrder()->take(3)->get();
@endphp
@extends('layouts.home_master')
@include('layouts.body.slider')
@include('layouts.body.notice')
@section('home_content')
<!-- Notice Start --> 

<!-- Notice End -->
<!-- Choose Start -->
@foreach($chooses as $choose)
<section class="choose-area pb-85 pt-77" style="background-image: url({{asset($choose->image)}});">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-left-4">
                <div class="choose-content text-start">
                    <h2>{{$choose->title}}</h2>
                    <p class="choose-option">{{$choose->description}} </p>
                    <a class="default-btn" href="{{route('all.courses')}}">view courses</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- Choose Area End -->
<!-- Courses Area Start -->
<div class="courses-area pt-150 text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <img src="{{asset('frontend/assets/img/icon/section.png')}}" alt="section-title">
                    <h2>COURSES WE OFFER</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
            <div class="col-lg-4 col-md-6">
                <div class="single-course">
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
                        <a class="default-btn mt-3" class="default-btn" href="{{url('course/details/'.$course->id)}}">enroll</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Courses Area End -->

{{-- <!-- Testimonial Area Start -->
@foreach($testimonials as $test)
<div class="testimonial-area pt-110 pb-105 text-center" style="background-image: url({{asset($test->bg_image)}});">
    <div class="container">
        <div class="row">
            <div class="testimonial-owl owl-theme owl-carousel">
                <div class="col-lg-8 offset-lg-2">
                    <div class="single-testimonial">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{asset($test->image)}}" alt="testimonial">
                            </div>
                            <div class="testimonial-content">
                                <p>{{$test->description}}</p>
                                <h4>{{$test->name}}</h4>
                                <h5>{{$test->study_at}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach --}}
<!-- Testimonial Area End -->
<!-- Blog Area Start -->
<div class="blog-area pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <img src="{{asset('frontend/assets/img/icon/section.png')}}" alt="section-title">
                    <h2>LATEST FROM BLOG</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="{{url('single/posts/'.$blog->id)}}"><img src="{{asset($blog->image)}}" alt="blog"></a>
                        <div class="blog-hover">
                            <a href="{{url('single/posts/'.$blog->id)}}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-top">
                            <p>By {{$blog->user->name}} / {{date('jS M Y',strtotime($blog->created_at))}}</p>
                        </div>
                        <div class="blog-bottom">
                            <h2><a href="{{url('single/posts/'.$blog->id)}}">{{$blog->title}} </a></h2>
                            <p>{{Str::limit($blog->blog_description,150)}}</p>
                            <a class="default-btn text-white mt-3" href="{{url('single/posts/'.$blog->id)}}">read more</a>
                        </div>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection