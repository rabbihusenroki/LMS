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
                            <h2>teacher / details</h2> 
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
        <div class="teacher-details-area pt-150 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="teacher-details-img">
                            <img src="{{asset($teacher_details->image)}}" style="width:489px; height:499px;" alt="teacher">  
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="teacher-details-content ml-50">
                            <h2>{{ $teacher_details->name}}</h2>
                            <h5>{{ $teacher_details->position}}</h5>
                            <h4>about me</h4>
                            <p>{{ $teacher_details->description}}</p>
                            <ul>
                                <li><span>degree: </span>{{ $teacher_details->degree}}</li>
                                <li><span>experience: </span>{{ $teacher_details->experience}}</li>
                                <li><span>hobbies: </span>{{ $teacher_details->hobbies}}</li>
                                <li><span>faculty: </span>{{ $teacher_details->faculty}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="teacher-contact">
                            <h4>contact information</h4>
                            <p><span>mail me : </span>{{ $teacher_details->mail}}</p>
                            <p><span>make a call : </span>{{ $teacher_details->call}}</p>
                            <ul>
                                <li><a href="{{asset('https://www.facebook.com/tahsin.rocky.5')}}"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="{{asset('https://www.facebook.com/tahsin.rocky.5')}}"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a href="{{asset('https://www.facebook.com/tahsin.rocky.5')}}"><i class="zmdi zmdi-vimeo"></i></a></li>
                                <li><a href="{{asset('https://www.facebook.com/tahsin.rocky.5')}}"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection