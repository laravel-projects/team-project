<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Team Project')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/default/fonts/font-awesome-4.6.3/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/default/fonts/ionicons-2.0.1/css/ionicons.min.css') }}">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/default/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/default/css/default.bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/app/css/app.css') }}" >
     <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

            <style>
                html, body {
                    height: 100%;
                }
 
 

                .content {
                    text-align: center;
                    display: inline-block;
                    font-family: 'Lato';
                    width: 100%;    margin-top: 20%;
                }

                .title {
                    font-size: 96px;
                }
                .description {
                    font-size: 1.8em;
                    background-color: #fa503a;
                    padding: 1%;
                    color: white;
                    font-weight: bold;
                }
            </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Team Project
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="{{ asset('assets/default/js/jquery.min.js') }}" ></script> 
    <script src="{{ asset('assets/default/js/bootstrap.min.js') }}" ></script> 


</body>
</html>
