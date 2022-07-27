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
                        <h3>Register new account</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <div class="page-links">
                            <a href="{{ route('login') }}">Login to account</a>
                        </div>
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