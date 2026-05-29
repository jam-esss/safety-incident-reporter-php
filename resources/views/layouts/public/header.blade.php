<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title', config('app.name'))</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<meta name="description" content="@yield('description', 'My website')">
