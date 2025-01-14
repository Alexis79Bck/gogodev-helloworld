<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | {{ config('app.name') }}</title>

        

        @include('layouts.includes.landing.styles')
        
    </head>
    <body class="bg-white">
        <div class="container-xxl p-0">
            <!-- Spinner Start -->
            @include('partials.landing.spinner')
            <!-- Spinner End -->
            
            <!-- Navbar & Hero Start -->
            <div class="container-xxl position-relative p-0">
                
                @include('partials.landing.navbar')
                
                @yield('hero-section')
               
            </div>
            <!-- Navbar & Hero End -->


            <!-- Content Section End-->            
            <div class="container-xxl py-5">
                    @yield('content')
                
            </div>
            <!-- Content Section End-->
        </div>
        @include('layouts.includes.landing.scripts')
    </body>
</html>