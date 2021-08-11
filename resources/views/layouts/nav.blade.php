<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">


    

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->






    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header_logo">
                        <a href="index.html"> <span>Ya</span>  Store. </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header_menu">
                        <ul>
                            <li class="active"> <a href="#">Home</a> </li>
                            <li> <a href="#">Women's</a> </li>
                            <li> <a href="#">Men's</a> </li>
                            <li> <a href="#">Shop</a> </li>
                            <li> <a href="#">Pages</a> </li>
                            <li> <a href="#">Contact Us</a> </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    @if (Route::has('login'))
                    <div class="header_right">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <div class="header_right_aut">
                        
                            <a href="{{ route('login') }}" class="bt_login">Log in</a>
                        
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bt_register">Register</a>
                        @endif
                    @endauth

                           
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>