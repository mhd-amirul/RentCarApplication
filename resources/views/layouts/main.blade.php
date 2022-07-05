<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    @include('includes.style')
    @stack('trix')
    @stack('mapbox')
    <title>Rental Mobil • {{ $title }}</title>
</head>
<body >
    @include('partials.navbar')
    @include('partials.pop-up')
    <div class="container mt-4">
        @yield('container')
    </div>
    @include('partials.footer')
    @include('includes.script')
    @stack('script-map')
    @stack('script-map-user')
    @stack('sweet')
</body>
</html>
