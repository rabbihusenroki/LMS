
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
                            <h2>blogs</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>    
<!-- Banner Area End -->
<!-- Blog Start -->
<div class="blog-area pt-150 pb-150">
    <div class="container">
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
                            <h5>{{Str::limit($blog->blog_description,113)}}</h5>
                            <a class="default-btn text-white mt-3" href="{{url('single/posts/'.$blog->id)}}">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
             
            
        </div>
        <br><br><br>
        <span class="text-center">{{$blogs->links()}}</span>
    </div>
    
</div>
@endsection