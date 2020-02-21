<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('layouts.partials._head')
   @yield('css')
</head>
<body>
    <div id="app">
        @include('layouts.partials._navbar')

        <main class="py-4">
            @yield('content')
        </main>

        @yield('footer')
    </div>
</body>
@yield('js')
</html>
