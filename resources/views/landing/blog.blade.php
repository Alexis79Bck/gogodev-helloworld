@extends('layouts.landing')

@section('title', 'Blog')

@section('hero-section')

    @include('partials.landing.animated-background')
    <div class="container mx-auto py-4 px-lg-5">
        
        <div class="row g-2 py-2">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Blog</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 120px;">
            </div>
        </div>
    </div>

@endsection

@section('content')

{{-- <x-landing.service.card title="Service 1" bodyContent="lorem Ipsum Mae" /> --}}

<div class="mt-4 container">
    <div class="row">
        <div class="col">
            Mis Proyectos
        </div>
    </div>
    <div class="row space-y-4 mt-4">
        Una card para cada Entrada de Blog  
    </div>

</div>

@endsection


