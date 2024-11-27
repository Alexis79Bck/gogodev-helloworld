{{-- @props(['title', 'bodyContent']) --}}

<div style="border: 2px solid blue; border-radius: 10px; padding: 10px; margin: 12px">
    <h3>{{ $title }}</h3>
    <div>
        <img src="{{ asset('assets/images/' . $photo ) }}" alt="photo 1" />
    </div>
    <p>{{ $bodyContent }}</p>
</div>