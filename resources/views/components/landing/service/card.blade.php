{{-- @props(['title', 'bodyContent']) --}}

<div class="card">
    
    <img class="card-img-top" src="{{ asset('assets/images/' . $photo ) }}" alt="photo 1" />
    
    <div class="card-body">
        <h4>{{ $title }}</h4>
        <span>{{ $bodyContent }}</span>
    </div>
</div>
