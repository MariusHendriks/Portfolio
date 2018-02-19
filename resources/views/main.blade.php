<!DOCTYPE html>
<html>
	<head>
		<title>@yield('Title', 'Portfolio')</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	</head>
		<nav>
			<div class="container">
				<div class="nav-wrapper">
					<a href="../../" class="brand-logo right">Portfolio</a>
					<ul id="nav-mobile" class="left hide-on-med-and-down	">
						<li><a href="/courses/DED">DED</a></li>
						<li><a href="/courses/SCO">SCO</a></li>
						<li><a href="/courses/UXU">UXU</a></li>
						<li><a href="/courses/PTM">PTM</a></li>
						<li><a href="/courses/ME">ME</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<body>
		<main>
			<div class="container">
			@yield('Main')
			<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
			<script type="text/javascript">

			</script>
		</main>
	</body>
</html>