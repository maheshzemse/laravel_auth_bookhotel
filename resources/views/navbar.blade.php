<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SkyLine Hotel</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
  /* Make the image fully responsive */
  /*.carousel-inner img {
    width: 100%;
    height: 100%;
  }*/
  </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm">
            <div class="container">
                <a style="color: white"class="navbar-brand" href="{{ url('/') }}">
                    SkyLine
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul  class="navbar-nav  ">
                        <div  >
                           <!--  <a style="text-decoration: none;display: inline-block;color: white" class="ml-3" href="">Home</a>
                            <a style="text-decoration: none;color: white" class="ml-3"href="gallary">Gallary</a>
                            <a style="text-decoration: none;color: white"class="ml-3"href="aboutus">About Us</a>
                            <a style="text-decoration: none;color: white"class="ml-3"href="">Contact</a>
 -->                        </div>
                     </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item"><a class="nav-link" style="text-decoration: none;display: inline-block;color: white" class="ml-3" href="">home</a></li>
                           <li class="nav-item"> <a class="nav-link"style="text-decoration: none;color: white" class="ml-3"href="gallary">Gallary</a></li>
                           <li class="nav-item"> <a class="nav-link" style="text-decoration: none;color: white"class="ml-3"href="aboutus">About Us</a></li>
                           <li class="nav-item"> <a class="nav-link" style="text-decoration: none;color: white"class="ml-3"href="">Contact</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a style="color: white" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color: white" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span style="color: white">  Welcome  {{ Auth::user()->name }}</span> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
        @yield('data')