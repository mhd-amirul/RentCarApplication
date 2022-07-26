<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        @include('includes.style')
        @stack('trix')
        @stack('mapbox')
        <title>Rental Mobil • {{ $title }}</title>
    </head>
    <body style="background: radial-gradient(circle at top left, #ead6ee, #ccfbff);">
        @include('partials.navbar')
        @include('partials.pop-up')
        <div class="container">
            @yield('container')
        </div>
        @yield('container2')
        @include('partials.footer')
        @include('includes.script')
        @stack('script-map')
        @stack('script-map-user')
        @stack('sweet')
    </body>
</html>
