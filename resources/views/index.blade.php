@extends('layouts.landing')

@section('title', 'Index')

@section('content')
    <!-- Tech Stacks Section -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-4">
                <h3 class="section-title text-secondary mb-4 animated slideInDown">
                    Stacks de Tecnologias<span></span>
                </h3>
            </div>
            <div class="row g-4 mb-3">
                <div class="col wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item  rounded text-center p-4">
                        <img width="84px" height="88px" src="{{ asset('assets/images/pages/home/html5.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item  rounded text-center p-4">
                        <img width="84px" height="88px" src="{{ asset('assets/images/pages/home/css3.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item  rounded text-center p-4">
                        <img width="156px" height="88px" src="{{ asset('assets/images/pages/home/laravel.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="1.2s">
                    <div class="feature-item  rounded text-center p-4">
                        <img width="156px" height="88px" src="{{ asset('assets/images/pages/home/livewire.png') }}"
                            alt="">
                    </div>
                </div>
        
                <div class="col wow fadeInUp" data-wow-delay="1.6s">
                    <div class="feature-item  rounded text-center p-4">
                        <img width="84px" height="88px" src="{{ asset('assets/images/pages/home/vue.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="2.0s">
                    <div class="feature-item  rounded text-center p-4">
                        <img width="84px" height="88px" src="{{ asset('assets/images/pages/home/github.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="2.4s">
                    <div class="feature-item  rounded text-center p-4">
                        <img width="144px" height="88px" src="{{ asset('assets/images/pages/home/mysql.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col wow fadeInUp" data-wow-delay="2.8s">
                    <div class="feature-item  rounded text-center p-4">
                        <img width="144px" height="88px" src="{{ asset('assets/images/pages/home/docker.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Me Description Section -->
    <div class="container-xxl py-5">
        <div class="container-fluid d-flex py-2 px-lg-3">
          
            <div class="row align-content-middle g-4">
                <div class="col-lg-6">
                    <p>
                        <img class="img-thumbnail  m-auto"
                        src="{{ asset('assets/images/pages/home/php-laravel-development.jpg') }}" />
                    </p>
                </div>
                <div class="col">
                    <h3 class="section-title text-secondary mb-4 animated slideInDown">
                        Sobre Mi<span></span>
                    </h3>
                    
                    <p>
                        Cómo apasionado por la innovación y la creación de soluciones digitales que resuelven problemas reales.
                        Mi conjunto de habilidades técnicas me permite abordar proyectos desafiantes desde el backend hasta el
                        frontend, siempre con un enfoque centrado en la experiencia del usuario.
                    </p>
                    <ul>
                        <li>
                            Desarrollo Backend: PHP, Laravel Framework, arquitectura de APIs, gestión de bases de datos
                            relacionales, seguridad web.
                        </li>
                        <li>Desarrollo Frontend: HTML, CSS, JavaScript, frameworks modernos (laravel livewire, vue, react),
                            optimización de rendimiento frontend.</li>
                        <li>Experiencia de Usuario: Diseño de interfaces intuitivas, investigación de usuarios, pruebas A/B.
                        </li>
                    </ul>
                    Me considero un aprendiz constante y me mantengo al día con las últimas tecnologías y tendencias del
                    desarrollo web para ofrecer soluciones vanguardistas.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ribbon Divider -->
  
        <div class="container-xxl bg-primary hero-header py-5 px-lg-3">
            <div class="row justify-content-center">
                 &nbsp;
            </div>
        </div>


    <!-- My Projects Gallery Section -->
    <div class="container-xxl  py-5">

        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title text-secondary">Mis Proyectos<span></span></h3>
                
            </div>
            <div class="row mt-n2  wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Todos</li>
                        <li class="mx-2" data-filter=".first">Sitios Web</li>
                        <li class="mx-2" data-filter=".second">Aplicaciones</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4  portfolio-container pb-3">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('hero-section')
    <div class="container-xxl bg-primary hero-header">
        <div class="container-fluid py-5 px-lg-5">
            @include('partials.landing.animated-background')
            <div class="container px-lg-5">
                <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div class="col d-flex justify-content-center">
                                    <img height="180px" src="{{ asset('assets/images/Alexis-Mata-Logo-Transparent.png') }}"
                                        alt="">
                                </div>
                                <div class="col text-center text-lg-start">
                                    <h1 class="text-white mb-4 animated slideInDown">
                                        Resolviendo tus desafíos digitales, un proyecto a la vez.
                                    </h1>
                                    <p class="text-white pb-3 animated slideInDown">
                                        Juntos construimos tu proyecto en código limpio, diseño elegante, resultados
                                        excepcionales.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item ">
                            <div class="row g-4">
                                <div class="col d-flex justify-content-center">
                                    <img height="180px" src="{{ asset('assets/images/Alexis-Mata-Logo-Transparent.png') }}"
                                        alt="">
                                </div>
                                <div class="col text-center text-lg-start">
                                    <h1 class="text-white mb-4 animated slideInDown">
                                        Soluciones digitales a tu medida al alcance de tu negocio.
                                    </h1>
                                    <p class="text-white pb-3 animated slideInDown">
                                        ¿Tienes un proyecto en mente? ¡Hagámoslo realidad juntos!
                                        Software que simplifica tus procesos, confiables y eficientes para tu empresa
                                    </p>
                                    <a href="{{ route('landing.about') }}"
                                        class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Leer
                                        Mas</a>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="row g-4">
                                <div class="col d-flex justify-content-center">
                                    <img height="180px" src="{{ asset('assets/images/Alexis-Mata-Logo-Transparent.png') }}"
                                        alt="">
                                </div>
                                <div class="col text-center text-lg-start">
                                    <h1 class="text-white mb-4 animated slideInDown">
                                        Convierto tus ideas en realidad digital, la primera impresión cuenta.
                                    </h1>
                                    <p class="text-white pb-3 animated slideInDown">
                                        Diseñamos sitios web que reflejan la personalidad de tu marca que te ayudan a
                                        destacar.
                                    </p>
                                    <a href="{{ route('landing.projects') }}"
                                        class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Ver
                                        Proyectos</a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row g-4">
                                <div class="col d-flex justify-content-center">
                                    <img height="180px" src="{{ asset('assets/images/Alexis-Mata-Logo-Transparent.png') }}"
                                        alt="">
                                </div>
                                <div class="col text-center text-lg-start">
                                    <h1 class="text-white mb-4 animated slideInDown">
                                        Innovación tecnológica al alcance de tu negocio.
                                    </h1>
                                    <p class="text-white pb-3 animated slideInDown">
                                        ¿Necesitas un desarrollador web freelance? La combinación de experiencia y
                                        tecnologías web modernas, permite innovar aplicaciones
                                        que generan un impacto real con un enfoque estratégico de alto rendimiento y valor
                                        añadido.
                                    </p>
                                    <a href="{{ route('landing.contact') }}"
                                        class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Contáctame</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

