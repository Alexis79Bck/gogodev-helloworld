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
    <div class="container-fluid py-5 px-lg-5" >
    
        <hr width="100%" height="2" color="black">
        
        <div class="row d-flex justify-content-between align-content-center g-2" >
            @foreach ($skills as $skill)                
                <div class="col-lg-4 col-md-4 col-sm wow fadeInUp" data-wow-delay="{{ $delaysSkill[$skill->name] }}s">
                    <a href="#" class="mr-2">
                        <div class="h-100 card btn rounded rounded-4 ">
                            <img height="156px" width="184px" class="img-fluid mx-auto" src="{{ asset('assets/images/pages/home/' . $skill->details()['image']) }}" alt="{{ $skill->details()['image'] }}">
                            <div class="card-body ">                            
                                <p class="card-text">{{ $skill->details()['description'] }}</p>
                            </div>
                        </div>
                    </a>                    
                </div>            
            @endforeach
        </div>

        <hr width="100%" height="4" color="black">
                
        <div class="row d-flex justify-content-between align-content-center g-2" >
            @foreach ($fundamentals as $fundamental)                
                <div class="col-lg-4 col-md-4 col-sm wow fadeInUp" data-wow-delay="{{ $delaysFundamental[$fundamental->name] }}s">
                    <a href="#" class="mr-2">
                        <div class="h-100 card  btn rounded rounded-4 ">
                            <img height="156px" width="184px" class="img-fluid mx-auto" src="{{ asset('assets/images/pages/home/' . $fundamental->details()['image']) }}" alt="{{ $fundamental->details()['image'] }}">
                            <div class="card-body ">                            
                                <p class="card-text">{{ $fundamental->details()['description'] }}</p>
                            </div>
                        </div>
                    </a>                    
                </div>            
            @endforeach
        </div>

        <hr width="100%" height="2" color="black">
     
        <div class="row d-flex justify-content-between align-center g-2" >
            @foreach ($techStack as $tech)                
                <div class="col-lg-4 col-md-4 col-sm wow fadeInUp" data-wow-delay="{{ $delaysTechStack[$tech->name] }}s">
                    <a href="#" class="mr-2">
                        <div class="h-100 card  btn rounded rounded-4 ">
                            <img height="156px" width="184px" class="img-fluid mx-auto" src="{{ asset('assets/images/pages/home/' . $tech->details()['image']) }}" alt="{{ $tech->details()['image'] }}">
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

@section('carousel')
    @include('partials.landing.carousel')
@endsection

