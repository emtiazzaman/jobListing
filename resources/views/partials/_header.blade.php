<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$title}}Job Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">

    <link rel="stylesheet" href="{{asset('css/example-styles.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <div class="logo">
                                    <a href="/">
                                        <img src="{{asset('img/logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">home</a></li>
                                            <li><a href="/jobs">Browse Job</a></li>
                                            <li><a href="/candidates">Candidates </a></li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="Appointment">

                                @auth 

                                  <div class="phone_num d-none d-xl-block">
                                     <a href="#">
                                            <i class="fa fa-user text-light"></i>
                                            {{auth()->user()->full_name}}
                                    </a>
                                        
                                    </div>
                                    <div class="phone_num d-none d-xl-block">
                                        <i class="fa fa-briefcase text-light"></i>
                                        <a class="text-bold" href="/jobs/manage">Manage Jobs</a>
                                    </div>
                                    <div class="phone_num d-none d-xl-block">
                                        <i class="fa fa-sign-out text-light"></i>
                                        <a href="/logout">Log Out</a>
                                    </div>
                                 
                                @else

                                    <div class="phone_num d-none d-xl-block">
                                        <a href="/register">
                                            <i class="fa fa-user-plus text-light"></i>
                                            Register
                                        </a>
                                    </div>
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="/login">
                                            <i class="fa fa-sign-in text-light"></i>
                                            Log in
                                        </a>
                                    </div>

                                @endauth

                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="/create-job">Post a Job</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->