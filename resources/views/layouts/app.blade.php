<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Backend Walter Böthel Zahntechnik</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')

</head>
<body>
    <div id="app">
        <header id="header">
            @include('layouts.header')
        </header>

        @yield('content')

        <footer id="footer">
            @include('layouts.footer')
        </footer>
    </div>
</body>
</html>
