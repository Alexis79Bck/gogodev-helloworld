@extends('layouts.landing')

@section('title', 'Sobre Mi')

@section('hero-section')

    @include('partials.landing.animated-background')
    <div class="container-xxl bg-primary hero-header">
    <div class="container mx-auto py-2 px-lg-4">
        
        <div class="row g-2 py-2">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Sobre Mí</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 120px;">
            </div>
        </div>
    </div>
    </div>

@endsection



@section('content')
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

@section('carousel')
    @include('partials.landing.carousel')
@endsection

