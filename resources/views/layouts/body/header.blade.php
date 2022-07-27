<header class="top">
<div class="header-area header-sticky fixed">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="thevisual" /></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content-wrapper one">
                    <!-- Main Menu Start -->
                    <div class="main-menu one text-end">
                        <nav>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('all.courses')}}">courses</a></li>
                                <li><a href="{{route('all.teachers')}}">teacher</a></li>
                                <li><a href="{{route('all.blogs')}}">blog</a></li>
                                <li><a href="{{route('all.contacts')}}">Contact</a></li>
                                <li><a href="{{route('user.logout')}}">Login/Register</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu one"></div>
                    <!-- Main Menu End -->
                </div>
            </div>
        </div>
    </div>
</div>
</header>