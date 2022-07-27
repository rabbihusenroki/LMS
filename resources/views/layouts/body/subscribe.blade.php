<div class="subscribe-area pt-60 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="subscribe-content section-title text-center">
                    <h2>subscribe our newsletter</h2>
                    <p>For get tips and tricks about new technology and job offers.</p>
                </div>
                <div class="newsletter-form mc_embed_signup">
                    <form action="{{route('store.subscriber')}}" method="POST">
                        @csrf
                        <div class="mc-form"> 
                            <input type="email" value="" name="email" class="email" placeholder="Enter your e-mail address" required>
                            <button class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button> 
                        </div>    
                    </form>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>