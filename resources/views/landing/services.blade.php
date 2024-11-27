@extends('layouts.landing')

@section('title', 'Services')

@section('content')

{{-- <x-landing.service.card title="Service 1" bodyContent="lorem Ipsum Mae" /> --}}

<div class="mt-4 container">
    <div class="row space-y-4 mt-4">
        <div class="col text-center">
            <div >
                <h1>SERVICES</h1>
            </div>
        </div>
    </div>
    <div class="row">
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
