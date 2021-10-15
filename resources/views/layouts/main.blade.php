<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics @yield('title')</title>
    @yield('cdns')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('includes.header')
    <main class="container">
        @yield('content')
    </main>
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>