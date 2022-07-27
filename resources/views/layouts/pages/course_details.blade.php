
@extends('layouts.home_master')
@section('home_content')
<!-- Banner Area Start -->
<div class="banner-area-wrapper">
    <div class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>courses details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Blog Start -->
<div class="courses-details-area blog-area pt-150 pb-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="courses-details">
                    <div class="courses-details-img">
                        <img src="{{asset($course_details->image)}}" style="width: 770px; height:320px; object-fit:fill" alt="courses-details">
                    </div>
                    <div class="course-details-content">
                        <h2>{{ $course_details->title }}</h2>
                        <p>{{ $course_details-> course_description }}</p>
                        <div class="course-details-left">
                            <div class="single-course-left">
                                <h3>about course</h3>
                                <p>{{ $course_details-> about_description }}</p>
                            </div>
                            <div class="single-course-left">
                                <h3>how to apply</h3>
                                <p>{{ $course_details-> apply_description }}</p>
                            </div>
                            <div class="single-course-left">
                                <h3>certification</h3>
                                <p class="margin">{{ $course_details-> certificate_description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="reply-area">
                        <h3>LEAVE A REPLY for Enroll</h3>
                        <p>Please fill up the form <br> We will contact with you as soon as possible with all details about enrollment</p>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{route('store.contact')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <p>Name</p>
                                <input type="text" name="name">
                            </div>
                            <div class="col-md-12">
                                <p>Email</p>
                                <input type="email" name="email">
                            </div>
                            <div class="col-md-12">
                                <p>Phone</p>
                                <input type="number" name="phone">
                            </div>
                            <div class="col-md-12">
                                <p>Subject</p>
                                <input type="text" name="subject">
                                <p>Massage</p>
                                <textarea name="message" cols="15" rows="10"></textarea>
                            </div>
                        </div>
                        <button class="reply-btn" type="submit"><span>send message</span></button>
                        <p class="form-message"></p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection