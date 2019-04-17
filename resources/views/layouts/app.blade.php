<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="app">
    <div id="container">
        <div class="header w-100">
            <div class="float-left col-md-4 col-sm-4" ><a href="{{ url('/') }}">{{ config('app.name') }}</a></div>
            <div class="float-right col-md-8 col-sm-8" style="text-align:right">
                <a href="{{ route('register') }}">Register</a>
                <a href="{{ route('login') }}">Login</a>
            </div>    
        </div>
        @yield('content')
    </div>
</div>
</body>
</html>
