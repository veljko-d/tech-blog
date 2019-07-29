<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - tech-blog</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    @include('layouts.message')

    <div id="app">
        <!-- Header -->
        <header>
            <h2>tech-blog - a simple blog, built with Laravel</h2>
            <p><span>{</span> work in progress... <span>}</span></p>
        </header>

        <!-- Navigation bar -->
        @include('layouts.navbar')

        <!-- Content -->
        <div id="main" class="row">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('layouts.footer')

        <!-- JavaScript -->
        <script src="{{ asset('js/layout.js') }}"></script>
        @yield('js')
    </div>
</body>
</html>
