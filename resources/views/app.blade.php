<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body class="antialiased">
        <div
            id="app" 
            style="min-height: 100vh; background-image: url('/assets/images/black_camo_image1.jpg'); background-size: cover;"
        >
            @yield('layout')
        </div>
    </body>
    @include('includes.scripts')
</html>
