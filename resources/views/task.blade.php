
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
<div class="container">
  <div class="row">
      <div class="col s12">
          <h3>{{$textContent->title}}</h3>
          {!! $textContent->textContent !!}
          @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1)
          <hr>
      </div>
  </div>
  <div class="row">
<div class="col s12">
  <a href="/courses/DED/{{$textContent->title}}/edit">
    <button class="btn waves-effect waves-light default-btn editButton">Edit
        <i class="material-icons right">edit</i>
      </button>
    </a>
  </div>
  </div>
@endif
</div>


@endsection
