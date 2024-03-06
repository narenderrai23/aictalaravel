<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Academic - Education, University and College Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Academic - Education, University and College Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('branch/images/favicon.ico') }}" />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap"
        rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('branch/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('branch/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('branch/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('branch/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('branch/css/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('branch/css/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('branch/css/animate/animate.min.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('branch/css/style.css') }}" />
</head>

<body>

    <!--=================================
    Header -->
    @include('branch-frontend.layouts.nav')
    <!--=================================
    Header -->


    @yield('slider')

    @yield('main')



    <!--=================================
    Footer-->
    @include('branch-frontend.layouts.footer')
    <!--=================================
    Footer-->

    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">up</div>
    <!--=================================
    Back To Top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('branch/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('branch/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('branch/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('branch/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('branch/js/counter/jquery.countTo.js') }}"></script>
    <script src="{{ asset('branch/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('branch/js/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('branch/js/swiperanimation/SwiperAnimation.min.js') }}"></script>
    <script src="{{ asset('branch/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('branch/js/shuffle/shuffle.min.js') }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('branch/js/custom.js') }}"></script>

</body>

</html>
