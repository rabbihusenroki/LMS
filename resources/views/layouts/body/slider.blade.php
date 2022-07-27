@php
  
    // $today = Carbon\Carbon::parse(today()->toDateString());
    // $sliders = DB::table('slides')->where('created_at', '>=', $today)
    //                         ->inRandomOrder()
    //                         ->take(3)
    //                         ->get();
    $sliders = DB::table('slides')->latest()->get();
@endphp

<section id="slider-container" class="slider-area">
    <div class="slider-owl owl-theme owl-carousel">
        
        @foreach($sliders as $key => $slider)
        <!-- Start Slingle Slide -->
        <div class="single-slide item {{$key == 0 ? 'active' : ''}}" style="background-image: url({{asset($slider->image)}});">
            <!-- Start Slider Content -->
            <div class="slider-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-offset-left-5">
                            <div class="slide-content-wrapper">
                                <div class="slide-content">
                                    <h3>{{$slider->title}}</h3>
                                    <p>{{$slider->description}}</p>
                                    <a class="default-btn" href="{{route('all.courses')}}">Learn more</a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Slider Content -->
        </div>
        <!-- End Slingle Slide -->
        @endforeach
    </div>
</section>