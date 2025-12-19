<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/LogoSKC.png" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title', 'App')</title>
</head>
<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    <main class="w-full">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Dummy Diagram --}}
    <script src="js/dummydiagram.js"></script>

    {{-- Smooth Scroll --}}
    <script src="js/SmoothScroll.js"></script>

    {{-- Script Navbar --}}
    <script src="js/navbar.js"></script>
</body>
</html>