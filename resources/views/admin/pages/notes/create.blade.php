@extends('layouts.prueba')

@section('title', 'Testing Notes Index')

@section('content')
    <div>

        <h1>Notes:</h1>
        <ul>
            @forelse ($notes as $note)
                <li>Name: {{ $note->title }} --- {{ $note->done ? 'Done' : 'Active' }}</li>
                
            @empty
                <li>The List is Empty</li>
            @endforelse
        </ul>

    </div>
@endsection