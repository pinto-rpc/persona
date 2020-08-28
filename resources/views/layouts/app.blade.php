<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            @include('layouts.partials.nav')
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
