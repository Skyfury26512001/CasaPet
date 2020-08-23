<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE] -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- [endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="We are woof">
    <meta name="author" content="PetCasa">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- page title -->
    <title>PetsCasa</title>
    <!--[if lt IE 9] -->
    <script src={{asset('assets/user/js/respond.js')}}></script>
    <!-- [endif]-->
    <!-- Font files -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CQuicksand:400,500,700" rel="stylesheet">
    <link href={{asset('assets/user/fonts/flaticon/flaticon.css')}} rel="stylesheet" type="text/css">
    <link href={{asset('assets/user/fonts/fontawesome/fontawesome-all.min.css')}} rel="stylesheet" type="text/css">
    <!-- Fav icons -->
    <link rel="apple-touch-icon" sizes="57x57" href={{asset('assets/user/img/icons/apple-icon-57x57.png')}}>
    <link rel="apple-touch-icon" sizes="72x72" href={{asset('assets/user/img/icons/apple-icon-72x72.png')}}>
    <link rel="apple-touch-icon" sizes="114x114" href={{asset('assets/user/img/icons/apple-icon-114x114.png')}}>
    <link rel="shortcut icon" type="image/x-icon" href={{asset('assets/user/img/icons/favicon.ico')}}>
    <!-- Bootstrap core CSS -->
    <link href={{asset('assets/user/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
    <!-- style CSS -->
    <link href={{asset('assets/user/css/style.css')}} rel="stylesheet">
    <!-- plugins CSS -->
    <link href={{asset('assets/user/css/plugins.css')}} rel="stylesheet">
    <!-- Colors CSS -->
    <link href={{asset('assets/user/styles/dogwalker.css')}} rel="stylesheet">

    <!-- SPECIFIC CSS -->
    @yield('specific_css')
    <!-- Custom CSS -->
    <style>
        .fb_dialog_content>iframe {
            bottom: 100px!important;
            right: 24px!important;
        }
    </style>
</head>

<!-- ==== body starts ==== -->
<body id="top">
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v8.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="107245207763414"
     theme_color="#F9BE4F"
     logged_in_greeting="Xin chào! Chúng tôi có thể giúp gì cho bạn?"
     logged_out_greeting="Xin chào! Chúng tôi có thể giúp gì cho bạn?">
</div>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
    </div>
    <!-- /spinner -->
</div>
<!-- /Preloader ends -->
<nav id="main-nav" class="navbar-expand-xl fixed-top">
    <div class="row">
        <!-- Start Top Bar -->
        <div class="container-fluid top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Start Contact Info -->
                        <ul class="contact-details float-left">
                            <li><i class="fa fa-map-marker"></i>8 Tôn Thất Thuyết - Hà Nội</li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:t1908e@gmail.com">t1908e@gmail.com</a>
                            </li>
                            <li><i class="fa fa-phone"></i>(123) 456-789</li>
                        </ul>
                        <!-- End Contact Info -->
                        <!-- Start Social Links -->
                        <ul class="social-list float-right list-inline">
                            <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item"><a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <!-- /End Social Links -->
                    </div>
                    <!-- col-md-12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- End Top bar -->
        <!-- Navbar Starts -->
        <div class="navbar container-fluid">
            <div class="container ">
                <!-- logo -->
                <a class="navbar-brand" href="/">
                    <i class="flaticon-dog-20"></i><span>PetsCasa</span>
                </a>
                <!-- Navbartoggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icon">
                  <i class="fas fa-bars"></i>
                  </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!-- menu item -->
                        <li class="nav-item">
                            <a class="nav-link" href="/">Trang chủ</a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/services" id="services-dropdown"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Dịch vụ
                            </a>
                            <div class="dropdown-menu" aria-labelledby="services-dropdown">
                                <a class="dropdown-item" href="/rescue">Cứu hộ chó mèo</a>
                                <a class="dropdown-item" href="/adoption">Nhận nuôi thú cưng</a>
                                <a class="dropdown-item" href="/concession">Nhượng thú cưng</a>
                            </div>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/store" id="adopt-dropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Cửa hàng
                            </a>
                            <div class="dropdown-menu" aria-labelledby="adopt-dropdown">
                                <a class="dropdown-item" href="#">Đồ dùng thú cưng</a>
                                <a class="dropdown-item" href="#">Chăm sóc thú cưng</a>
                            </div>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/news">Tin tức</a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/about" id="about-dropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Về chúng tôi
                            </a>
                            <div class="dropdown-menu" aria-labelledby="about-dropdown">
                                <a class="dropdown-item" href="/about">Giới thiệu</a>
                                <a class="dropdown-item" href="/team">Thành viên</a>
                            </div>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item ">
                            <a class="nav-link" href="/contact">Liên hệ</a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item active">
                            <a class="nav-link" href="/donation">
                                Donate
                            </a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item">
                            <a class="nav-link" href="/login_register">
                                Đăng nhập/Đăng ký
                            </a>
                        </li>
                    </ul>
                    <!--ul -->
                </div>
                <!--collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar -->
    </div>
    <!--row -->
</nav>
<!-- /nav -->
<!-- Jumbotron -->

<!-- content start -->
@yield('content')
<!-- content end -->

<!-- ==== footer ==== -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a class="navbar-brand" href="/"><i class="flaticon-dog-20"></i><span>PetsCasa</span></a>
                <p class="mt-3">Nhóm trẻ tình nguyện viên Việt Nam và quốc tế, hoạt động vì tình yêu chó mèo.</p>
            </div>
            <!-- col-lg -->
            <div class="col-lg-3">
                <h6><i class="fas fa-envelope margin-icon"></i>Liên hệ</h6>
                <ul class="list-unstyled">
                    <li>(123) 456-789</li>
                    <li><a href="mailto:t1908e@gmail.com">t1908e@gmail.com</a></li>
                    <li>8 Tôn Thất Thuyết - Hà Nội</li>
                </ul>
                <!--ul -->
            </div>
            <!-- col-lg -->
            <div class="col-lg-3">
                <h6><i class="far fa-clock margin-icon"></i>Đường dẫn nhanh</h6>
                <ul class="list-unstyled">
                    <li><a href="/login_register">Đăng nhập hoặc đăng ký</a></li>
                    <li><a href="/adoption">Nhận nuôi</a></li>
                    <li><a href="/donate_guide">Nhận nuôi ảo</a></li>
                </ul>
                <!--ul -->
            </div>
            <!-- col-lg -->
        </div>
        <!-- row-->
        <div class="row">
            <div class="credits col-sm-12">
                <p>Copyright 2020 / Designed by <a href="/about_us">Avenger Team</a></p>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
    <!-- Go To Top Link -->
    <div class="page-scroll hidden-sm hidden-xs">
        <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--page-scroll-->
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v8.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="107245207763414"
         theme_color="#ff7e29"
         logged_in_greeting="Xin chào! Chúng tôi có thể giúp gì cho bạn?"
         logged_out_greeting="Xin chào! Chúng tôi có thể giúp gì cho bạn?">
    </div>
</footer>
<!-- footer-->
<!-- Bootstrap core & Jquery -->
<script src={{asset('assets/user/vendor/jquery/jquery.min.js')}}></script>
<script src={{asset('assets/user/vendor/bootstrap/js/bootstrap.min.js')}}></script>
<!-- Custom Js -->
<script src={{asset('assets/user/js/custom.js')}}></script>
<script src={{asset('assets/user/js/plugins.js')}}></script>
<!-- Prefix free -->
<script src={{asset('assets/user/js/prefixfree.min.js')}}></script>
<!-- SPECIFIC SCRIPTS -->
@yield('specific_js')
</body>
</html>
