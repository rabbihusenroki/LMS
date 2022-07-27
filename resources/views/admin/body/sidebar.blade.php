<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="mdi mdi-close"></i>
        </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="{{url('/dashboard')}}" class="logo">
                <img src="{{asset('backend/register/images/logo.png')}}" alt="" class="logo-large"> 
            </a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft" id="sidebar-main">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main Menu</li>

                <li>
                    <a href="{{url('/dashboard')}}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span>OnlineKit
                                <span class="badge badge-pill badge-primary float-right">7</span>
                        </span>
                    </a>
                </li>

                <li class="menu-title">All Pages</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-animation"></i>
                        <span> Slider </span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.slider')}}">All Slider</a>
                        </li>
                        <li>
                            <a href="{{route('add.slider')}}">Add Slider</a>
                        </li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-bell-ring-outline"></i>
                        <span> Notice & Feature </span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.notice')}}">All Notices</a>
                        </li>
                        <li>
                            <a href="{{route('add.notice')}}">Add Notice</a>
                        </li>
                        <li>
                            <a href="{{route('all.feature')}}">All Features</a>
                        </li>
                        <li>
                            <a href="{{route('add.feature')}}">Add Feature</a>
                        </li><hr>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-thumb-up"></i>
                        <span>Choose-Us </span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.choose')}}">All Choose</a>
                        </li>
                        <li>
                            <a href="{{route('add.choose')}}">Add Choose</a>
                        </li><hr>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-school"></i>
                        <span>Course </span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.course')}}">All Course</a>
                        </li>
                        <li>
                            <a href="{{route('add.course')}}">Add Course</a>
                        </li><hr>
                    </ul>
                </li>
                {{-- <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-comment-text"></i>
                        <span>Testimonial</span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.testimonial')}}">All Testimonial</a>
                        </li>
                        <li>
                            <a href="{{route('add.testimonial')}}">Add Testimonial</a>
                        </li><hr>
                    </ul>
                </li> --}}
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-human-male"></i>
                        <span>Teacher</span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.teacher')}}">All Teacher</a>
                        </li>
                        <li>
                            <a href="{{route('add.teacher')}}">Add Teacher</a>
                        </li><hr>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-pencil-box"></i>
                        <span>Blog</span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.blog')}}">All Post</a>
                        </li>
                        <li>
                            <a href="{{route('add.blog')}}">Add Post</a>
                        </li><hr>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-information"></i>
                        <span>About</span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.about')}}">About Details</a>
                        </li>
                        <li>
                            <a href="{{route('add.about')}}">Add About</a>
                        </li><hr>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-contact-mail"></i>
                        <span>Contact</span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.contact')}}">Contact Details</a>
                        </li>
                        <li>
                            <a href="{{route('add.contact')}}">Add Contact</a>
                        </li><hr>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span>Message</span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.message')}}">Student Message</a>
                            <a href="{{route('all.mail')}}">Student Email</a>
                        </li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-image-filter-black-white"></i>
                        <span>Banner</span>
                        <span class="float-right">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('all.banner')}}">All Banner</a>
                        </li>
                        <li>
                            <a href="{{route('add.banner')}}">Add Banner</a>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>