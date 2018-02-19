
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
    Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')

    @foreach($textContent as $course)
        <div class="row courserow">
            <div class="col s2 weekNumber">
                Week {{ $course->week }}
            </div>
            <div class="offset-s1 col s9">
                {!! $course->textContent !!}
                <hr class="textline">
            </div>
        </div>
    @endforeach


@endsection