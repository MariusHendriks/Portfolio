{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
    Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
    <div class="container">
        <h3>Sprint 1</h3>
        @include('carrousel', ['amount' => '1', 'sprint' => '1'])

        <h3>Sprint 2</h3>
        @include('carrousel', ['amount' => '2', 'sprint' => '2'])

        <h3>Sprint 3</h3>
        @include('carrousel', ['amount' => '3', 'sprint' => '3'])

        <h3>Sprint 4</h3>
        @include('carrousel', ['amount' => '4', 'sprint' => '4'])

        <h3>Sprint 5</h3>
        @include('carrousel', ['amount' => '5', 'sprint' => '5'])

    </div>
@endsection
