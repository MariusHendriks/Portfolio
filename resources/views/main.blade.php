<!DOCTYPE html>
<html>
<head>
    <title>@yield('Title', 'Portfolio')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<nav class="nav">
    <div class="container">
        <div class="nav-wrapper">

            <a href="../../" class="brand-logo right">Portfolio</a>

            <ul id="nav-mobile" class="left hide-on-med-and-down	">
                <li><a href="/courses/DED">DED</a></li>
                <li><a href="/courses/SCO">SCO</a></li>
                <li><a href="/courses/UXU">UXU</a></li>
                <li><a href="/courses/PTM">PTM</a></li>
                <li><a href="/me">ME</a></li>
                @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1)
                    <li><a href="/courses/add">ADD</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<body>
<main>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    @yield('Main')

    @yield('Javascript')


</main>

</head>


</body>
</html>
