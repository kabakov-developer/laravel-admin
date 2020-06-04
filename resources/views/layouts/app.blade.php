<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('inc.head')
</head>
<body>
    @include('inc.header')
    <div id="app">
        <main class="container mt-5">
            @yield('content')
        </main>
    </div>
    @include('inc.footer')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
</body>
</html>
