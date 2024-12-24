@extends('layouts.landing')

@section('title', 'Contacto')

@section('hero-section')

    @include('partials.landing.animated-background')
    <div class="container mx-auto py-4 px-lg-5">
        
        <div class="row g-2 py-2">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Contacto</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 120px;">
            </div>
        </div>
    </div>

@endsection

@section('content')

{{-- <x-landing.service.card title="Service 1" bodyContent="lorem Ipsum Mae" /> --}}

<div class="mt-4 container">
    
    <div class="row space-y-4 mt-4">
        <div class="col-lg-8">
            Imagen
        </div>

        <div class="col-lg-4">
            formulario
        </div>

    </div>

</div>

@endsection
