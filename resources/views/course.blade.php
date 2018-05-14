
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
    Courses
@endsection
{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')

    <div class="container">
        @foreach($textContent as $sprint)
            <h3>Sprint {{ $sprint->first()->sprint }}</h3>
            @include('carrousel', ['sprint' => $sprint])
        @endforeach
    </div>

@endsection
