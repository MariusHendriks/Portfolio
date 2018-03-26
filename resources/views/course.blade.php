{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
    Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
    <h1>sprint 1</h1>
    @include('carrousel', ['amount' => '4'])
    <h1>sprint 2</h1>
    @include('carrousel', ['amount' => '5'])
    <h1>sprint 3</h1>
    @include('carrousel', ['amount' => '2'])
    <h1>sprint 4</h1>
    @include('carrousel', ['amount' => '4'])
@endsection
