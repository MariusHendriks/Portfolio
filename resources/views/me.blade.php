
{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
	Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<section class="guitar">
		<style>

		</style>
		</head>
		<body>

		<h1>Grid Layout</h1>

		<p>This grid layout contains six columns and three rows:</p>

		<div class="grid-container">
		  <div class="item1">Head</div>
		  <div class="item2">Menu</div>
		  <div class="item3">Main</div>
		  <div class="item4">Right</div>
		  <div class="item5">Footer</div>
		</div>
<script>
window.sr = ScrollReveal({ reset: true });
sr.reveal('.chat');
</script>

@endsection
