@extends('layouts.landing')

@section('title', 'Index')

@section('carousel')
    @include('partials.landing.carousel')
@endsection

@section('content')
    <div class="container-fluid py-5 px-lg-5" >
        <div class="row g-4">
            <div class="col-lg-6">
                <p class="section-title text-secondary">Habilidades<span></span></p>
            </div>
        </div>
                
        <div class="row d-flex justify-content-between align-content-center g-2" >
            @foreach ($skills as $skill)                
                <div class="col-lg-4 col-md-4 col-sm wow fadeInUp" data-wow-delay="{{ $delaysSkill[$skill->name] }}s">
                    <a href="#" class="mr-2">
                        <div class="h-100 card btn rounded rounded-4 ">
                            <img height="156px" class="card-img-top mx-auto" src="{{ asset('assets/images/pages/home/' . $skill->details()['image']) }}" alt="{{ $skill->details()['image'] }}">
                            <div class="card-body ">                            
                                <p class="card-text">{{ $skill->details()['description'] }}</p>
                            </div>
                        </div>
                    </a>                    
                </div>            
            @endforeach
        </div>
        <hr width="100%" size="2" color="black">
        <div class="row g-4">
            <div class="col-lg-6">
                <p class="section-title text-secondary">Principios y Fundamentos<span></span></p>
            </div>
        </div>
                
        <div class="row d-flex justify-content-between align-content-center g-2" >
            @foreach ($fundamentals as $fundamental)                
                <div class="col-lg-4 col-md-4 col-sm wow fadeInUp" data-wow-delay="{{ $delaysFundamental[$fundamental->name] }}s">
                    <a href="#" class="mr-2">
                        <div class="h-100 card  btn rounded rounded-4 ">
                            <img class="card-img-top mx-auto" src="{{ asset('assets/images/pages/home/' . $fundamental->details()['image']) }}" alt="{{ $fundamental->details()['image'] }}">
                            <div class="card-body ">                            
                                <p class="card-text">{{ $fundamental->details()['description'] }}</p>
                            </div>
                        </div>
                    </a>                    
                </div>            
            @endforeach
        </div>

        <hr width="100%" size="2" color="black">
        <div class="row g-4">
            <div class="col-lg-6">
                <p class="section-title text-secondary">Tecnologías<span></span></p>
            </div>
        </div>
        <div class="row d-flex justify-between align-center g-2" >
            @foreach ($techStack as $tech)                
                <div class="col-lg-4 col-md-4 col-sm wow fadeInUp" data-wow-delay="{{ $delaysTechStack[$tech->name] }}s">
                    <a href="#" class="mr-2">
                        <div class="h-100 card  btn rounded rounded-4 ">
                            <img height="128px" width="188px"  class="card-img-top mx-auto" src="{{ asset('assets/images/pages/home/' . $tech->details()['image']) }}" alt="{{ $tech->details()['image'] }}">
                            <div class="card-body ">                            
                                <p class="card-text">{{ $tech->details()['description'] }}</p>
                            </div>
                        </div>
                    </a>                    
                </div>            
            @endforeach
        </div>
    </div>

@endsection

@section('hero-section')

    
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
