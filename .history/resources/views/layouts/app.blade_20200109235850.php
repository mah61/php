<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/7d003c661e.js"></script>    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>

<body>
    @section('header')
     
    <div id="app">
    <div class="container">   
    <div class="header" id="myHeader" >
            <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm justify-content-start">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--logo-->
            <a class="navbar-brand" href="#"><img src="" alt="logo" style="width:80px;" >
            <span id="brand">CVENT</span></a>

                         
            <div class="collapse navbar-collapse justify-content-start" id="collapsibleNavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        @if(Auth::check())
                        <a class="navbar-brand" href="home">
                        Profile
                        </a>
                        @endif
                    </li>
                
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="navbar-brand" href="browse">Events</a>
                    </li>
                    <li class="nav-item">
                        @if(Auth::check())
                            <a class="navbar-brand" href="post">
                            PostEvent
                            </a>
                        @endif
                        
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="aboutus">About Us</a>
                    </li> 
                    <li class="nav-item">
                        <a class="navbar-brand" href="contactus">Contact Us</a>
                    </li>     
                    </ul>


                
                <!--endheader-->

                

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    @section('footer')    
    <footer>
        <div class="row footer content py-2">
            <div class="offset-lg-1 col-lg-6 pt-4 pl-3 col-sm-12 text-sm-center text-lg-left">
        <div>

        <a class="navbar-brand" href="aboutus">About Us</a>
     
        <br>
        <a class="navbar-brand" href="contactus">Contact Us</a>
        
        </div><br>
        <p>Shahram, Mahnaz, Somayah&copy; 2020</p>
    
            </div>
        <div class="col-lg-5 pt-1 footer-icons col-sm-12 text-center"> 

                <a href="https://m.facebook.com/" target="_blank" class="face"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>                
                <a href="https://twitter.com/" target="_blank" class="twitter"><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.whatsapp.com/" target="_blank" class="whatsapp"><i class="fab fa-whatsapp-square"></i></a>
        
        </div>
    </footer>

@show


</body>

</html>