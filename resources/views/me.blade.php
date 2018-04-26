
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
	Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<div class="head">
		<img src="{{asset('photos/head.svg')}}" >
	</div>
	<section class="me">

		<div class="first">
	  	<div class="eventleft" id="eventleft1">
				<h5>1998</h5>
				Op 10 april 1998 ben ik geboren! Dit was de eerste keer dat ik op aarde was. Maarja als kind kon ik nog niet zo veel.
			</div>
			<div class="eventleft" id="eventleft2">
				<h5>2001</h5>
				Dit jaar ging ik naar de chrash, op voorbereiding van de basisschool. Dit was bij ons thuis en mijn moeder leidde de crash.
			</div>
			<div class="eventleft" id="eventleft3">
				<h5>2003</h5>
				Ik begon met voetballen toen ik 5 jaar oud was. En heb dit gedaan tot ik 14 was. In deze periode was ik bijna elke dag buiten, weer of geen weer.
			</div>
			<div class="eventleft" id="eventleft4">
				<h5>2005</h5>
				En dat bewees ik hier. Waar ik in een jaar tijd zwemvaardigheid 1, 2 en 3 haalde.
			</div>
			<div class="eventleft" id="eventleft5">
				<h5>2008</h5>
				Toen ik 10 jaar was vond ik de jeugdraad van het carnaval heel leuk, dus ik had me opgegeven om nar te worden. Spannend was het niet want ik was de enige die me had aangemeld, en dit maakte me voor dit jaar nar. #shame.
			</div>
			<div class="eventleft" id="eventleft6">
				<h5>2010</h5>
				De basisschool was afgerond en ik ging naar het VMBO toe. Ik ging naar kader toe op het fioretti college. Daar heb ik 4 jaar lang geen reet uitgevoerd en het met gemak gehaald. Ook had ik dit jaar mijn eerste baantje. Ik was 12 jaar oud en begon aan mijn krantenwijk.
			</div>
			<div class="eventleft" id="eventleft7">
				<h5>2012</h5>
				In 2012 liep ik mijn eerste stage bij een echt bedrijf. Ik presteerde hier zo goed dat ze me een bijbaantje hadden aangeboden. Dit was bij de Boerenbond in Veghel. Dit deed ik naast mijn krantenwijk. Ik moest helaas aan het eind van het jaar alweer stoppen omdat ik mijn arm gebroken had (ik was van de halfpipe afgevallen bij het skaten) en niet kon werken op de feestdagen (kerst, oud en nieuw). Dit maakte mij op zich niet zo heel veel uit want ik vond het werk niet heel erg leuk.
			</div>
			<div class="eventleft" id="eventleft8">
				<h5>2014</h5>
				En weer had ik iets gebroken. Dit keer mijn arm. Ik was met mijn broer aan het klooien op trampo en hij landde op mijn arm. Het was een kleine breuk. Ook ging ik dit jaar naar het MBO. Dit vond ik erg leuk want ik mocht eindelijk iets gaan doen wat me leuk leek.
			</div>
			<div class="eventleft" id="eventleft9">
				<h5>2016</h5>
				3e jaar van mijn  MBO. Ik mocht stage gaan lopen en had de mogelijkheid dit in het buitenland te doen. Ik twijfelde geen seconde en ging meteen aan de slag met het regelen hiervan. Ik ben in deze stageperiode van 6 maanden in Londen geweest en heb mezelf daar erg ontwikkeld!
			</div>
			<div class="eventleft" id="eventleft10">
				<h5>2018</h5>
				Ik was dit jaar begonnen op het fontys. Ik had erg getwijfeld of ik Media of Software wilde gaan doen want ik vond het beide erg leuk en kon het beide ook best goed. Uiteindelijk ben ik toch voor Media gegaan, en dit is een van de producten die ik gemaakt heb!
			</div>
		</div>
		<div class="second">
	  	<div class="fret" id="fret1">

			</div>
			<div class="fret" id="fret2">

			</div>
			<div class="fret circleGuitar" id="fret3">

			</div>
			<div class="fret" id="fret4">

			</div>
			<div class="fret circleGuitar" id="fret5">

			</div>
			<div class="fret" id="fret6">

			</div>
			<div class="fret circleGuitar" id="fret7">

			</div>
			<div class="fret" id="fret8">

			</div>
			<div class="fret circleGuitar" id="fret9">

			</div>
			<div class="fret" id="fret10">

			</div>
			<div class="fret" id="fret11">

			</div>
			<div class="fret doublecircleGuitar" id="fret12">

			</div>
			<div class="fret" id="fret13">

			</div>
			<div class="fret" id="fret14">

			</div>
			<div class="fret circleGuitar" id="fret15">

			</div>
			<div class="fret" id="fret16">

			</div>
			<div class="fret circleGuitar" id="fret17">

			</div>
			<div class="fret" id="fret18">

			</div>
			<div class="fret circleGuitar" id="fret19">

			</div>
			<div class="fret" id="fret20">

			</div>
			<div class="fret circleGuitar" id="fret21">

			</div>
			<div class="fret" id="fret22">

			</div>
		</div>
		<div class="third">
	  	<div class="eventright" id="eventright1">
				<h5>2000</h5>
				In het jaar 2000 kwamen de eerste verschijnselen van mijn klunsigheid naar boven. Ik had in dit jaar niet 1x, maar 2x mijn sleutelbeen gebroken. De eerste keer was ik van de bank af gevallen. En toen ik thuis kwam van de dokter om het na te laten kijken een aantal weken later gleed ik uit en brak mijn andere sleutelbeen. Ook was ik dit jaar van Erp naar Zijtaart verhuist, helaas. Want later bleek dat ik met vooral mensen uit Erp omging vanaf mijn VMBO tot heden.
			</div>
			<div class="eventright" id="eventright2">
				<h5>2002</h5>
				Ik kreeg er een broertje bij, Thijs. En ik was vanaf 2 september 2002 de middelste van de 3. Ook ging ik dit jaar de basisschool.
			</div>
			<div class="eventright" id="eventright3">
				<h5>2004</h5>
				Ik hou ontzettend van zwemmen. Dat werd bekend in 2005, waar ik in minder dan een jaar tijd A, B en C haalde. Ik ging hierna nog door met zwemmen op een hoger niveau.
			</div>
			<div class="eventright" id="eventright4">
				<h5>2007</h5>
				Carnaval vond ik en vind ik nogsteeds heel leuk. Toen ik 9 jaar oud was deed ik mee aan de jeugdraad. Dat vond ik toen de tijd heel leuk.
			</div>
			<div class="eventright" id="eventright5">
				<h5>2009</h5>
				Ik was nog niet klaar met het jeugd carnaval van Zijtaart, en werd dit jaar gekozen tot adjudant. Dit vond ik super tof want je kreeg echt ontelbaar veel snoep en chocolade van allemaal mensen die je niet kende. Beter kan niet toch?
			</div>
			<div class="eventright" id="eventright6">
				<h5>2011</h5>
				Hier gebeurde een groot ding in mijn leven. Ik ontdekte games op de computer. Ik vond het zo vet dat mijn ouders direct een tijdslot op de pc gezet hadden. Maar ik liet me niet kennen en had hem gekraakt binnen no time. En dat toen ik 13 jaar was, gewoon uit nieuwschierigheid rondneuzen in de bestanden.
			</div>
			<div class="eventright" id="eventright7">
				<h5>2013</h5>
				En weer, brak ik iets. Dit keer mijn sleutelbeen. Ik besloot dat het een leuk idee was om met een crossfiets over een bergje te springen. Ik landde op mijn schouder, die uit de kom lag.
			</div>
			<div class="eventright" id="eventright8">
				<h5>2015</h5>
				Ja ja ik bewijs het weer. Ik brak mijn elleboog in een mosh pit op een metal feest. Hoe ik daar terecht was gekomen, was door mijn passie waar ik dit jaar achter kwam. Gitaar spelen. Ik snapte er niks van en heb alles mezelf aangeleerd. Ook was ik dit jaar begonnen bij een baantje waar ik 3 jaar gewerkt heb. De ijssalon in Veghel.
			</div>
			<div class="eventright" id="eventright9">
				<h5>2017</h5>
				Ik had dit jaar mijn MBO afgerond. Het was echt een makkie. Ik heb in totaal 0x huiswerk gemaakt omdat ik me gewoon niet uitgedaagd genoeg voelde. Ook had ik dit jaar mijn eerste 'optreden'. Ik trad op voor mijn oom die 50 werd voor zo'n 200 mensen. Ik speelde daar een setje van 5 nummers.
			</div>
		</div>
	</section>
<script>
window.sr = ScrollReveal({ reset: true });
sr.reveal('.eventleft');
sr.reveal('.eventright');

</script>

@endsection
