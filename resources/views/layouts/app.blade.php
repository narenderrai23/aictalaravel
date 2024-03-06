<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="college, education, institute, responsive, school, teacher, template, university">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akhil Bhartiya Computer Trainer Association</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">
    <!-- Popup -->
    <link href="css/assets/magnific-popup.css" rel="stylesheet">
    <!-- Slick Slider -->
    <link href="css/assets/slick.css" rel="stylesheet">
    <link href="css/assets/slick-theme.css" rel="stylesheet">
    <!-- owl carousel -->
    <link href="css/assets/owl.carousel.css" rel="stylesheet">
    <link href="css/assets/owl.theme.css" rel="stylesheet">
    <!-- Main Menu-->
    <link rel="stylesheet" href="css/assets/meanmenu.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" type="text/css" href="engine1/style.css" />

    <style>
        .tt {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ttt {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #f5e7e7;
        }

        .ttt {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #f16da6;
            color: #FFFFFF;



        }

        .tttt {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #00bcd5;
            color: #FFFFFF;

        }

        .ttttt {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #0052b9;
            color: #FFFFFF;

        }

        .text {
            font-size: 20px;
            padding-left: 20px;
        }

        .responsive {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="home_version_03">
    <!-- Preloader -->


    <!-- Navigation -->
    @include('layouts.nav')
    <!-- end of navigation -->


    @yield('slider')

    @yield('main')


    <!-- Footer -->
    @include('layouts.footer')
    <!-- end of footer -->


    <!-- Footer Area section -->

    <!-- ============================
    JavaScript Files
    ============================= -->

    <!-- jQuery -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/assets/bootstrap.min.js"></script>

    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>

    <!-- Sticky JS -->
    <script src="js/assets/jquery.sticky.js"></script>
    <!-- Popup -->
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="js/assets/owl.carousel.min.js"></script>
    <!-- Slick Slider-->
    <script src="js/assets/slick.min.js"></script>
    <!-- Main Menu -->
    <script src="js/assets/jquery.meanmenu.min.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>

    @stack('scripts')
</body>

</html>
