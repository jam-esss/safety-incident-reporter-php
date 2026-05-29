<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

@include('layouts.client.header')

<main>
    @yield('content')
</main>

@include('layouts.client.footer')

</body>
</html>
