
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
	Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
<section class="courses">
	<div class="container">
		<div class="row">
			<div class="col s3">
				<div class="courseBox">
					<h3>DED</h3>
					<ul>
						<li>Opbouw van de site</li>
						<li>Conceptdocument</li>
						<li>Database opbouw</li>
						<li>Functionaliteiten</li>
						<li>Schetsen</li>
						<li>Feedback</li>
					</ul>
					<a href="/courses/DED">
						<button class="btn waves-effect waves-light default-btn homepagebutton">Naar DED
								<i class="material-icons right">send</i>
						</button>
					</a>
				</div>
			</div>
			<div class="col s3">
				<div class="courseBox">
					<h3>SCO</h3>
					<ul>
						<li>Moodboard</li>
						<li>Beeldassociatites</li>
						<li>Fotografie</li>
						<li>Logo's</li>
						<li>Branding</li>
						<li>Concurrentieanalyse</li>
					</ul>
					<a href="/courses/SCO">
						<button class="btn waves-effect waves-light default-btn homepagebutton">Naar SCO
								<i class="material-icons right">send</i>
						</button>
					</a>

				</div>
			</div>
			<div class="col s3">
				<div class="courseBox">
					<h3>UXU</h3>
					<ul>
						<li>Ken je gebruiker</li>
						<li>Intervieuwen</li>
						<li>Storyboards</li>
						<li>Card sorting</li>
						<li>Analyses</li>
						<li>Tinkeren</li>
					</ul>
					<a href="/courses/UXU">
						<button class="btn waves-effect waves-light default-btn homepagebutton">Naar UXU
								<i class="material-icons right">send</i>
						</button>
					</a>

				</div>
			</div>
			<div class="col s3">
				<div class="courseBox">
					<h3>PTM</h3>
					<ul>
						<li>Overeenkomsten</li>
						<li>Projectdocument</li>
						<li>Onderzoek</li>
						<li>Tekstdesign</li>
						<li>Kleur</li>
						<li>Moodboard	</li>
					</ul>
					<a href="/courses/PTM">
						<button class="btn waves-effect waves-light default-btn homepagebutton">Naar PTM
								<i class="material-icons right">send</i>
						</button>
					</a>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection
