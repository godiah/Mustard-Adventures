<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Mustard Adventures', 'Mustard Adventures') }} - Discover Kenya's Wild Heart</title>
    <meta name="description"
        content="Expert-guided tours, thrilling hikes, and authentic outdoor experiences across Kenya's most spectacular destinations">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=quicksand:300,400,500,600,700|open-sans:300,400,500,600,700|pacifico:400"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-body">
    @yield('content')
</body>

</html>
