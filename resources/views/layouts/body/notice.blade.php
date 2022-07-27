@php
  
    // $today = Carbon\Carbon::parse(today()->toDateString());
    // $notices = DB::table('notices')->where('created_at', '>=', $today)
    //                         ->inRandomOrder()
    //                         ->take(3)
    //                         ->get();
    $notices = DB::table('notices')->latest()->get();
    $features = DB::table('features')->latest()->get();
@endphp
<section class="notice-area pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="notice-left">
                    <h3>notice board</h3>
                    @foreach($notices as $notice)
                    <div class="single-notice-left mb-25 pb-25">
                        <h4>{{date('jS M Y',strtotime($notice->event_date))}}</h4>
                        <p>{{$notice->description}}</p>
                        
                    </div>
                    <hr>
                    @endforeach
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="notice-right">
                    @foreach($features as $feature)
                    <div class="single-notice-right mb-25 pb-25">
                        <h3>{{$feature->name}}</h3>
                        <p>{{$feature->description}}</p>
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>