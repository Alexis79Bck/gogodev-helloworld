@extends('layouts.landing')

@section('title', 'Servicios')

@section('hero-section')

    @include('partials.landing.animated-background')
    <div class="container mx-auto py-4 px-lg-5">
        
        <div class="row g-2 py-2">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Servicios</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 120px;">
            </div>
        </div>
    </div>

@endsection

@section('content')

{{-- <x-landing.service.card title="Service 1" bodyContent="lorem Ipsum Mae" /> --}}

<div class="mt-4 container">
    <div class="row space-y-4 mt-4">
        <div class="col-lg-4">
            @component('components.landing.service.card')

                @slot('title', 'Service 1')

                @slot('photo', 'photo-1.jpg')
                
                @slot('bodyContent')
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut nobis esse assumenda, quaerat ipsam quasi. Alias accusamus libero ipsum suscipit, illum odit quibusdam? Minima obcaecati adipisci sit numquam dolorem maxime.
                @endslot
            @endcomponent
        </div>

        <div class="col-lg-4">
            @component('components.landing.service.card')
                @slot('title', 'Service 2')

                @slot('photo', 'photo-2.jpg')
                
                @slot('bodyContent')
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut nobis esse assumenda, quaerat ipsam quasi. Alias accusamus libero ipsum suscipit, illum odit quibusdam? Minima obcaecati adipisci sit numquam dolorem maxime.
                @endslot
            
            @endcomponent
        </div>

        <div class="col-lg-4">
            @component('components.landing.service.card')
                @slot('title', 'Service 3')

                @slot('photo', 'photo-3.jpg')
                
                @slot('bodyContent')
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut nobis esse assumenda, quaerat ipsam quasi. Alias accusamus libero ipsum suscipit, illum odit quibusdam? Minima obcaecati adipisci sit numquam dolorem maxime.
                @endslot
            @endcomponent
        </div>
    </div>

</div>

@endsection
