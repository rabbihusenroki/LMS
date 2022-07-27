@extends('layouts.home_master')
@section('home_content')

<!-- Banner Area Start -->
<div class="banner-area-wrapper">
    @foreach ($contact_banners as $contact_banner)
    <div class="banner-area text-center" style="background-image: url({{asset($contact_banner->contact_banner)}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>    
<!-- Banner Area End -->
<!-- Contact Start -->
<div class="map-area">
    <!-- google-map-area start -->
    <div class="google-map-area">
        <!--  Map Section -->
        <div id="contacts" class="map-area">
            <div id="googleMap" style="width:100%;height:440px;"></div>
        </div>
    </div>
</div>
<div class="contact-area pt-150 pb-140"> 
    <div class="container">     
        <div class="row">
            @foreach ($contacts as $contact)
            <div class="col-lg-5 col-md-5">
                <div class="contact-contents text-center">
                    <div class="single-contact mb-65">
                        <div class="contact-icon">
                            <img src="{{asset('frontend/assets/img/contact/contact3.png')}}" alt="contact">
                        </div>
                        <div class="contact-add">
                            <h3>Email</h3>
                            <p>{{$contact->email}}</p>
                        </div>
                    </div>
                    <div class="single-contact mb-65">
                        <div class="contact-icon">
                            <img src="{{asset('frontend/assets/img/contact/contact1.png')}}" alt="contact">
                        </div>
                        <div class="contact-add">
                            <h3>address</h3>
                            <p>{{$contact->address}}</p>
                        </div>
                    </div>
                    <div class="single-contact">
                        <div class="contact-icon">
                            <img src="{{asset('frontend/assets/img/contact/contact2.png')}}" alt="contact">
                        </div>
                        <div class="contact-add">
                            <h3>Phone</h3>
                            <p>{{$contact->phone}}</p>
                        </div>
                    </div>
                </div>
            </div>    
            @endforeach
            <div class="col-lg-7 col-md-7">
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
<!-- Contact End -->
@endsection