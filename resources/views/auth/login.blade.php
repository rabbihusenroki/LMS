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
                        <h3>Login to account</h3>
                        <p>Please enter a valid information to continue-The Visual Admin Access</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input text-white" id="remember_me">
                                        <label class="custom-control-label text-white" for="remember_me">Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="{{ route('password.request') }}">Forget password?</a>
                            </div>
                        </form>
    
                        <div class="page-links">
                            <a href="{{ route('register') }}">Register new account</a>
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