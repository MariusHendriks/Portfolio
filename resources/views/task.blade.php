
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
<div class="container">
  <h3>{{$textContent->title}}</h3>
  {!! $textContent->textContent !!}
</div>
@if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1)
  <hr>
  <a href="/courses/DED/{{$textContent->title}}/edit" class="btn btn-default">
    Edit
  </a>
@endif


@endsection
