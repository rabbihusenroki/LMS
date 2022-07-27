<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Visual</title>
    <link rel="stylesheet" type="text/css" href="{{asset('backend/register/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/register/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/register/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/register/css/iofrm-theme29.css')}}">
    
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="{{route('user.logout')}}">
                <div class="logo">
                    <img class="logo-size" src="{{asset('backend/register/images/logo.png')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('backend/register/images/graphic3.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Before Continue</h3>
                        <p>Could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
                        @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-700 text-sm text-danger">
                            {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <div class="form-group text-center row m-t-20 mb-0">
                                <div class="col-12">
                                    <button class="btn btn-raised btn-primary btn-block waves-effect waves-light" type="submit">Resend Verification Email</button>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            
                                <div class="col-5 mt-3 float-right">
                                    <button class="btn btn-raised btn-primary btn-block waves-effect waves-light" type="submit">Logout</button>
                                </div>
                        
                        </form>
                    </div>
                    <div>
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('backend/register/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/register/js/popper.min.js')}}"></script>
<script src="{{asset('backend/register/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/register/js/main.js')}}"></script>
</body>
</html>