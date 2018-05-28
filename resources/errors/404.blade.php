
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
	Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
<div class="centertext">
<h5>Hey boef! Probeer je nou zelf een link in te typen! Dat is natuurlijk niet de bedoeling!</h5>
<a href="/">
	<button class="btn waves-effect waves-light default-btn" action="submit" type="submit" name="submit">Ga terug naar de homepage
			<i class="material-icons right">send</i>
	</button>
</a>
</div>
@endsection
