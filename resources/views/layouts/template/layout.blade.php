<?php
/**
 * Compiles the navbar, content, footer, scripts and styles.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', config('app.name'))
    </title>

    <meta name="description" content="@yield('description', 'Logo Ipsum')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body>

    @include('layouts.public.nav')

    <main>
        @yield('content')
    </main>

    @include('layouts.public.footer')

    @stack('scripts')

</body>
</html>
