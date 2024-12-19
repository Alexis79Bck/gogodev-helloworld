<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | GOGODEV - Laravel</title>

        

        @include('layouts.includes.landing.styles')
        
    </head>
    <body>
        <!-- Spinner Start -->
        @include('partials.landing.spinner')
        <!-- Spinner End -->

         <!-- Navbar & Hero Start -->
         <div class="container-xxl position-relative p-0">
            
            @include('partials.landing.navbar')

            @yield('hero-section')
            @yield('breadcrumb')
        </div>
        <!-- Navbar & Hero End -->
        
        

        @yield('content')
       

        @include('layouts.includes.landing.scripts')
    </body>
</html>