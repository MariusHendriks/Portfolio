
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
	Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')

  <script>
  //get is een ajax call, function data is mijn 'succes'. Dus als mijn message goed ontvangen is
      $.get( "/message", function( data ) {
        //voert hij json.stringify (leesbare var) uit, dat is dus mijn succes.
      alert( JSON.stringify(data));
    });
  </script>

@endsection
