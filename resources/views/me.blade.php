
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
			<div class="text3 textblock rightarrow">Ik studeer nu natuurlijk op het HBO. Ik heb hier al ontzettend veel geleerd over diverse onderwerpen</div>
			<div class="text4 textblock leftarrow">PHP, dat was het vak dat ik het meeste kreeg op het MBO. Vandaar dat ik er ook al ervaring mee heb.</div>
			<div class="text5 textblock rightarrow">En omdat ik er al ervaring mee had, is dit portfolio gemaakt met Laravel. Een PHP, MVC framework. Ik wilde dit sinds mijn eerste stage (op het MBO) al uitproberen.</div>
			<div class="text6 textblock leftarrow">HTML heb ik ook geleerd op het MBO. En omdat ik leergierig ben heb ik nu voor deze pagina gridview gebruikt. Ik had daar tot nu nog geen ervaring mee. En op deze manier blijf ik nieuwe methodes uitproberen.</div>
			<div class="text7 textblock rightarrow">Ook CSS ken ik al een aantal jaar. Ook op het MBO en op mijn stages heb ik hier erg veel ervaring mee gekregen.</div>
			<div class="text8 textblock leftarrow">Javascript heb ik pas écht geprobeerd hier op het HBO. Ik vind het op zich wel fijn te gebruiken maar ben er nog niet ervaren mee. Dat gezegd, ben ik natuurlijk wel leergierig genoeg om dit tot in de details te gaan leren.</div>
			<div class="text9 textblock rightarrow">Jquery vond ik meteen heel fijn om te gebruiken. Aangezien alles er gestructureerder en makkelijker uit ziet en ook fijner werkt (naar mijn mening).</div>
			<div class="text10 textblock leftarrow">C# vond ik extreem lastig, op het begin. Maar ik was vastberaden een voldoende te halen en heb ELKE AVOND van mijn eerste 10 weken hier op de opleiding wat C# gemaakt. Uiteindelijk met vlag en wimpel gehaald.</div>
			<div class="text11 textblock rightarrow">Naast alle programmeertalen vind ik video's editen super leuk om te doen. Dat ondervonden een aantal docenten hier op school ook. Als ik een video mocht maken in plaats van een duf bestand dan deed ik dat.</div>
			<div class="text12 textblock leftarrow">Verder speel ik (natuurlijk) gitaar. Dit is nu ongeveer 5 jaar mijn favoriete bezigheid als ik thuis ben. Ik speel dan muziek als AC/DC, Metallica, Volbeat, System of a Down en nog veel meer!</div>
			<div class="text13 textblock rightarrow">Zoals je misschien kon raden houdt ik dus van Rock en Metal. Ik vind het super tof om naar een concert of festival te gaan en daar lekker de mosh pit in te vliegen.</div>
			<div class="text14 textblock leftarrow">Ik ben dus al op het MBO beginnen met programmeren. Maar daarvoor deed ik samen met een vriend van me pogingen tot Minecraft plugins te schrijven. Het zit dus een beetje in mijn aard.</div>
			<div class="text15 textblock rightarrow">Ik speel tegenwoordig ook in een bandje. Hier spelen we covers en zijn recent begonnen met muziek schrijven. Helaas hebben we nog geen bandnaam.</div>
			<div class="text16 textblock leftarrow">Op het MBO had ik te weinig uitdaging en werd ik extreem lui. Zodra we nieuwe opdrachten kregen maakte ik ze af op dezelfde dag en ging weer 3 weken niets doen in de les. Op het HBO daarintegen wordt ik genoeg uitgedaagd.</div>
			<div class="text17 textblock rightarrow">Ik ben stiekem best wel een nert. Ik heb mijn eigen PC gebouwd en zodra ik iets met technologie kon doen deed ik dat. Ik schroefde mijn eerste telefoon uit elkaar uit nieuwschierigheid toen ik een jaar of 10 was.</div>
			<div class="text18 textblock leftarrow">Ik ga als innovatie route Education doen. Het lijkt me super leuk om voor de klas te staan en ik vind het leuk om dingen uit te leggen, dus waarom niet?</div>
			<div class="text19 textblock rightarrow">Yes. Gamen. Ik spendeer elke minuut die ik over heb naast school en gitaarspel aan World of Warcraft. Ik speel deze game nu 5 jaar en om de een of andere reden blijf ik het geweldig vinden om te spelen. Ik ben er ook best goed in (al zeg ik het zelf).</div>
			<div class="text20 textblock leftarrow">Naast het hele school-, en hobby gebeuren ga ik graag met vrienden naar de kroeg. De kroeg waar je mij bijna elk weekend kan vinden is de Paal in Erp.</div>
			<div class="text21 textblock rightarrow">Ik houdt er niet alleen van om naar festivals te gaan (Graspop staat voor de deur), maar ik werk er ook op. Ik sta op de grootste festivals bij de food kraampjes, en vind dit ontzettend leuk om te doen.</div>
			<div class="text22 textblock leftarrow">Zoals je misschien gezien hebt ben ik niet geweldig in het ontwerpen van designs en deze uitwerken. Ik vind het overigens wel leuk om te doen.</div>
			<div class="guitarbody">
		</div>
	</section>
<script>
	window.sr = ScrollReveal({ reset: true });
	sr.reveal('.textblock');
</script>

@endsection
