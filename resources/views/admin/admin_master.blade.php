<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>OnlineKit -Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Rabbi Husen Roki" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('backend/assets/images/logo.png')}}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/fullcalendar/vanillaCalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/morris/morris.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/metro/MetroJs.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/assets/plugins/carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/carousel/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/assets/plugins/animate/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap-material-design.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/assets/css/datepicker.min.css')}}" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">


    <link rel="stylesheet" href="{{asset('backend/assets/css/icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}" type="text/css">

    
    

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.body.sidebar')

        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
            @include('admin.body.header')
                <!-- Top Bar End -->

                <div class="page-content-wrapper dashborad-v">

                    <div class="container-fluid">
                       
                        @yield('content')
                        <!--end row-->

                    </div>
                    <!-- container -->

                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->
             <!-- Footer Start -->
            @include('admin.body.footer')
           
            <!-- Footer End -->
        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->

    
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="{{asset('backend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap-material-design.js')}}"></script>
    <script src="{{asset('backend/assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/detect.js')}}"></script>
    <script src="{{asset('backend/assets/js/fastclick.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('backend/assets/js/waves.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/fullcalendar/vanillaCalendar.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/metro/MetroJs.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('backend/assets/pages/dashborad.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>

    <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
        </script>
</body>

</html>