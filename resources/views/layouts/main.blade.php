<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    @include('includes.style')
    <title>Rental Mobil • {{ $title }}</title>
</head>
<body>

    @include('partials.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>
    
    @include('includes.script')
    @stack('script-map')
    @stack('script-map-user')
</body>
</html>
