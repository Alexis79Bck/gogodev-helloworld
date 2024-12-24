@extends('layouts.landing')

@section('title', 'Index')



@section('content')
@include('partials.landing.animated-background')
    <div class="container-fluid d-flex py-5 px-lg-5" >
        <div class="row align-content-middle  g-4">
            <div class="col-lg-6">
                <p>
                    <img class="img-thumbnail  m-auto" src="{{ asset('assets/images/pages/home/php-laravel-development.jpg') }}" />
                </p>
            </div>
            <div class="col-lg-6">
                <p >
                    Cómo apasionado por la innovación y la creación de soluciones digitales que resuelven problemas reales. 
                    Mi conjunto de habilidades técnicas me permite abordar proyectos desafiantes desde el backend hasta el frontend, 
                    siempre con un enfoque centrado en la experiencia del usuario.
                </p>
                <p>
                    Como desarrollador web full-stack, aplicando principios de arquitectura limpia y mejores prácticas de desarrollo. 
                    Mi sólida base en POO, Patrones de Diseño y Principios SOLID me permite escribir código mantenible, extensible y fácil de entender. 
                    Utilizo Laravel Framework como mi principal herramienta de desarrollo backend, complementándolo con Laravel Livewire para interfaces dinámicas y Vue.js para un frontend moderno y reactivo.
                </p>
                    <ul>
                        <li>
                            Desarrollo Backend: PHP, Laravel Framework, arquitectura de APIs, gestión de bases de datos relacionales, seguridad web.
                        </li>
                        <li>Desarrollo Frontend: HTML, CSS, JavaScript, frameworks modernos (laravel livewire, vue, react), optimización de rendimiento frontend.</li>
                        <li>Experiencia de Usuario: Diseño de interfaces intuitivas, investigación de usuarios, pruebas A/B.</li>
                    </ul>
                    Me considero un aprendiz constante y me mantengo al día con las últimas tecnologías y tendencias del desarrollo web para ofrecer soluciones vanguardistas.
                </p>
            </div>
        </div>

    </div>

@endsection

@section('hero-section')
<div class="container-fluid py-5 px-lg-5" >
    <div class="container px-lg-5">
        @include('partials.landing.animated-background')
        <div class="row g-4">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">
                    Desarrollo Software a tu Medida: Resultados que Impulsan tu Negocio
                </h1>
                <p class="text-white pb-3 animated slideInDown">
                    Como desarrollador freelance, me enfoco en crear soluciones digitales que generen un impacto real en tu negocio. 
                    Combino experiencia en las tecnologías web modernas, con un enfoque estratégico para ofrecerte aplicaciones web 
                    de alto rendimiento y valor añadido.
                </p>
                <a href="{{ route('landing.about') }}" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Leer Mas</a>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <img height="192px" class="animated zoomIn" src="{{ asset('assets/images/Alexis-Mata-Logo-Transparent.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
