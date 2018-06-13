
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
	Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<section class="gitaar-outter">
		<div class="gitaar">
			<div class="head"></div>
			<div class="fret0"></div>
			<div class="fret1 fret">Fontys</div>
			<div class="fret2 fret"></div>
			<div class="fret3 fret"></div>
			<div class="fret4 fret"></div>
			<div class="fret5 fret"></div>
			<div class="fret6 fret"></div>
			<div class="fret7 fret"></div>
			<div class="fret8 fret"></div>
			<div class="fret9 fret"></div>
			<div class="fret10 fret"></div>
			<div class="fret11 fret"></div>
			<div class="fret12 fret"></div>
			<div class="fret13 fret"></div>
			<div class="fret14 fret"></div>
			<div class="fret15 fret"></div>
			<div class="fret16 fret"></div>
			<div class="fret17 fret"></div>
			<div class="text1 textblock rightarrow"></div>
			<div class="text2 textblock leftarrow"></div>
			<div class="text3 textblock rightarrow"></div>
			<div class="text4 textblock leftarrow"></div>
			<div class="text5 textblock rightarrow"></div>
			<div class="text6 textblock leftarrow"></div>
			<div class="text7 textblock rightarrow"></div>
			<div class="text8 textblock leftarrow"></div>
			<div class="text9 textblock rightarrow"></div>
			<div class="text10 textblock leftarrow"></div>
			<div class="text11 textblock rightarrow"></div>
			<div class="text12 textblock leftarrow"></div>
			<div class="text13 textblock rightarrow"></div>
			<div class="text14 textblock leftarrow"></div>
			<div class="text15 textblock rightarrow"></div>
			<div class="text16 textblock leftarrow"></div>
			<div class="text17 textblock rightarrow"></div>
			<div class="guitarbody">
		</div>
	</section>
<script>
	window.sr = ScrollReveal({ reset: true });
	sr.reveal('.textblock');
</script>

@endsection
