<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | GOGODEV - Laravel</title>

        @include('layouts.includes.styles')
        
    </head>
    <body>
        {{-- @yield('carousel') --}}
        @yield('content')

        @include('layouts.includes.scripts')
    </body>
</html>