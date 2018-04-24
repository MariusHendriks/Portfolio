
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
	Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<section class="me">
		<div class="first">
	  	<div class="event" id="1">
				1998, born, idunno
			</div>
			<div class="event" id="2">
				lorum ipsum
			</div>
			<div class="event" id="3">
				1998, born, idunno
			</div>
			<div class="event" id="4">
				lorum ipsum
			</div>
			<div class="event" id="5">
				1998, born, idunno
			</div>
			<div class="event" id="6">
				lorum ipsum
			</div>
			<div class="event" id="7">
				1998, born, idunno
			</div>
			<div class="event" id="8">
				lorum ipsum
			</div>
			<div class="event" id="9">
				1998, born, idunno
			</div>
			<div class="event" id="10">
				lorum ipsum
			</div>
		</div>
		<div class="second">
	  	<div class="event" id="1">
				1998, born, idunno
			</div>
			<div class="event" id="2">
				lorum ipsum
			</div>
			<div class="event" id="3">
				1998, born, idunno
			</div>
			<div class="event" id="4">
				lorum ipsum
			</div>
			<div class="event" id="5">
				1998, born, idunno
			</div>
			<div class="event" id="6">
				lorum ipsum
			</div>
			<div class="event" id="7">
				1998, born, idunno
			</div>
			<div class="event" id="8">
				lorum ipsum
			</div>
			<div class="event" id="9">
				1998, born, idunno
			</div>
			<div class=";" id="10">
				lorum ipsum
			</div>
		</div>
		<div class="third">
			<div class="event" id="1">
				1998, born, idunno
			</div>
			<div class="event" id="2">
				lorum ipsum
			</div>
			<div class="event" id="3">
				1998, born, idunno
			</div>
			<div class="event" id="4">
				lorum ipsum
			</div>
			<div class="event" id="5">
				1998, born, idunno
			</div>
			<div class="event" id="6">
				lorum ipsum
			</div>
			<div class="event" id="7">
				1998, born, idunno
			</div>
			<div class="event" id="8">
				lorum ipsum
			</div>
			<div class="event" id="9">
				1998, born, idunno
			</div>
			<div class="event" id="10">
				lorum ipsum
			</div>
		</div>
	</section>
<script>
window.sr = ScrollReveal({ reset: true });
sr.reveal('.event');

</script>

@endsection
