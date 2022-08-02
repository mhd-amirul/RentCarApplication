<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        @include('includes.style')
        @stack('trix')
        @stack('mapbox')
        <title>Rental Mobil • {{ $title }}</title>
    </head>
    <body style="background: radial-gradient(circle at top left,#B0A8B9, #008CCC);">
        @include('partials.navbar')
        @include('partials.pop-up')
        <div class="container">
            @yield('container')
        </div>
        @include('partials.footer')
        @include('includes.script')
        @stack('script-map')
        @stack('script-map-user')
        @stack('sweet')
    </body>
</html>
