@extends('layouts.landing')

@section('title', 'Sobre Mi')

@section('hero-section')

    @include('partials.landing.animated-background')
    <div class="container mx-auto py-4 px-lg-5">
        
        <div class="row g-2 py-2">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Sobre Mí</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 120px;">
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div>
        <h1>ABOUT</h1>
    </div>
@endsection

