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
    @yield('scripts')

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
        <div class="row">
            <div class="logo w-100">
                <img src="{{ asset('images/krg.png') }}" alt="karuganda logo" srcset="" class="klogo float-left">
                <div class="col-md-6 float-right">
                    <h1>ECOLE SECONDAIRE SAINT JOSEPH KARUGANDA</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="menubar w-100">
                <div>
                <a href="{{ url('/') }}">Home</a>
                @guest
                <a href="{{ url('contact_us') }}">Contact us</a>
                <a href="{{ route('login') }}">Login</a>
                @else
                <a href="{{ route('bankslip.create') }}">Record-slip</a>
                <a href="{{ url('checkpayment/viewslip') }}">check-payment</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endguest
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>
</body>
</html>
