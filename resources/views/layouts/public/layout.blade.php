<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

@include('layouts.public.header')

<main>
    @yield('content')
</main>

@include('layouts.public.footer')

</body>
</html>
