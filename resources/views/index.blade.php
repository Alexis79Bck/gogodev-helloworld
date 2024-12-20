@extends('layouts.landing')

@section('title', 'Index')

@section('carousel')
    @include('partials.landing.carousel')
@endsection

@section('content')
    <div class="container py-5 px-lg-5" >
        <div class="row g-4" >
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                    <h5 class="mb-3">Digital Marketing</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-search text-primary mb-4"></i>
                    <h5 class="mb-3">SEO & Backlinks</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-item bg-light rounded text-center p-4">
                    <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                    <h5 class="mb-3">Design & Development</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('hero-section')

    
    <div class="container px-lg-5">
        @include('partials.landing.animated-background')
        <div class="row g-4 align-items-end">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">
                    Desarrollo Web a tu Medida: Resultados que Impulsan tu Negocio
                </h1>
                <p class="text-white pb-3 animated slideInDown">
                    Como desarrollador web freelance, me enfoco en crear soluciones digitales que generen un impacto real en tu negocio. 
                    Combino experiencia en las tecnologías web modernas, con un enfoque estratégico para ofrecerte aplicaciones web 
                    de alto rendimiento y valor añadido.
                </p>
                <a href="{{ route('landing.about') }}" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Leer Mas</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start ">
                <img class="img-fluid animated zoomIn" src="{{ asset('assets/images/hero.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
