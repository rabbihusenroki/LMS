@extends('layouts.home_master')
@section('home_content')

<div class="banner-area-wrapper">
    @foreach ($banners as $banner)
    <div class="banner-area text-center" style="background-image: url({{asset($banner->about_banner)}});">	
        <div class="container">
            <div class="row">
                
                <div class="col-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>About</h2> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div> 

<div class="about-area pt-145 pb-155">
    <div class="container">
        <div class="row">
            @foreach ($abouts as $about)
            <div class="col-md-6">
                <div class="about-content">
                    <h2>WELCOME TO <span>{{$about->name}}</span></h2>
                    <p>{{$about->description}}</p>
                    <a class="default-btn" href="{{route('all.courses')}}">view courses</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-img">
                    <img src="{{asset($about->image)}}" alt="about">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About End -->
<!-- Teacher Start -->
<div class="teacher-area pb-150">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <img src="{{asset('frontend/assets/img/icon/section.png')}}" alt="title">
                    <h2>meet our teachers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($teachers as $teacher)
            <div class="col-lg-3 col-sm-6">
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
    </div>
</div>
<!-- Teacher End -->

<!-- Testimonial Area End -->
<!-- Notice Start -->
<section class="notice-area two pt-140 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="notice-right-wrapper mb-25 pb-25">
                    <h3>TAKE A VIDEO TOUR</h3>
                    <div class="notice-video">
                        <div class="video-icon video-hover">
                            <iframe width="544" height="315" src="https://www.youtube.com/embed/ImtZ5yENzgE"></iframe>
                        </div>
                    </div>
                </div> 
            </div>
            
            <div class="col-md-6">
                <div class="notice-left-wrapper">   
                    <h3>notice board</h3>
                    
                    <div class="notice-left">
                        @foreach($notices as $notice)
                        <div class="single-notice-left mb-23 pb-20">
                            
                            <h4>Starts {{date('jS M Y',strtotime($notice->event_date))}}</h4>
                            <p>{{$notice->description}}</p>
                            <hr> </div>
                        @endforeach
                        
                    </div>
                    
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!-- Notice End -->
@endsection