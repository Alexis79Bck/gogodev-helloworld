@extends('layouts.prueba')

@section('title', 'Testing Users Index')

@section('content')
    <div>
        <h1>Users List:</h1>
        <ul>
            @forelse ($users as $user)
                <li>Name: {{ $user->name }} --- Age: {{ $user->age }}</li>
                
            @empty
                <li>The List is Empty</li>
            @endforelse
        </ul>

    </div>
@endsection