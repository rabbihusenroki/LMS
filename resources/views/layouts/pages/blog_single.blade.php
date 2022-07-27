@php
use Illuminate\Support\Carbon;
use App\Models\Blog;
$today = Carbon::today()->toDateString();
$latest = Blog::latest()->inRandomOrder($today)->take(5)->get();
    
@endphp
@extends('layouts.home_master')
@section('home_content')
   <!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            @foreach ($blog_banners as $blog_banner)
    <div class="banner-area text-center" style="background-image: url({{asset($blog_banner->blog_banner)}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2>blog details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
        </div>    
		<!-- Banner Area End -->
        <div class="blog-details-area pt-150 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details">
                            
                            <div class="blog-details-img">
                                <img src="{{asset($single->image)}}" style="width: 770px; height:320px; object-fit:fill" alt="blog-details">
                            </div>
                            <div class="blog-details-content">
                                <h2>{{$single->title}} </h2>
                                <h6>By {{$single->user->name}} / {{date('jS M Y',strtotime($single->created_at))}}</h6>
                                <p>{{$single->blog_description}}</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-sidebar right">
                            <div class="single-blog-widget mb-47">
                                <h3>latest post</h3>
                              @foreach($latest as $new)
                                <div class="single-post mb-30">
                                    <div class="single-post-img">
                                        <a href="{{url('single/posts/'.$new->id)}}"><img src="{{asset($new->image)}}" style="width: 95px; height:84px; object-fit:fill" alt="post">
                                            <div class="blog-hover">
                                                <i class="fa fa-link"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="single-post-content">
                                        <h4><a href="{{url('single/posts/'.$new->id)}}">{{$new->title}}</a></h4>
                                        <p>By {{$new->user->name}} / {{date('jS M Y',strtotime($new->created_at))}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
@endsection