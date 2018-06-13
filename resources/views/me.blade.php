
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
			<div class="fret1 fret">MBO</div>
			<div class="fret2 fret">Stage in het buitenland</div>
			<div class="fret3 fret">HBO</div>
			<div class="fret4 fret">PHP</div>
			<div class="fret5 fret">Laravel</div>
			<div class="fret6 fret">HTML</div>
			<div class="fret7 fret">CSS</div>
			<div class="fret8 fret">Javascript</div>
			<div class="fret9 fret">Jquery</div>
			<div class="fret10 fret">C#</div>
			<div class="fret11 fret">Videos</div>
			<div class="fret12 fret">Gitaar spelen</div>
			<div class="fret13 fret">Rock & Metal</div>
			<div class="fret14 fret">Programmeur</div>
			<div class="fret15 fret">Bandje</div>
			<div class="fret16 fret">Uitdaging</div>
			<div class="fret17 fret">Nert</div>
			<div class="fret18 fret">Docent</div>
			<div class="fret19 fret">Gamen</div>
			<div class="fret20 fret">De Paal</div>
			<div class="fret21 fret">Festivals</div>
			<div class="fret22 fret">Slot</div>
			<div class="text1 textblock rightarrow">Om te beginnen heb ik MBO gedaan. Waar ik al een basis op heb gebouwt in PHP, HTML, CSS en Javascript</div>
			<div class="text2 textblock leftarrow">Ik heb in Londen stage gelopen voor een half jaar. Daar heb ik net zo veel geleerd als op mijn hele MBO studie bij elkaar</div>
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
			<div class="text18 textblock leftarrow"></div>
			<div class="text19 textblock rightarrow"></div>
			<div class="text20 textblock leftarrow"></div>
			<div class="text21 textblock rightarrow"></div>
			<div class="text22 textblock leftarrow"></div>
			<div class="guitarbody">
		</div>
	</section>
<script>
	window.sr = ScrollReveal({ reset: true });
	sr.reveal('.textblock');
</script>

@endsection
