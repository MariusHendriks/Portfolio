{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
    Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
    <section class="homepage">
        <div class="container centertext">
            <div class="row">
                <div class="col s12 text-center">
                    <img class="indexImage" src="{{asset('photos/shares/Me/indeximage.png')}}">
                    <p class="indexText">
                        Mijn naam is
                    </p>
                    <p class="indexTextMe">
                        Mark Hendriks
                    </p>
                </div>
            </div>
            <div class="changePart">
                <div class="andima">
                    <span class="ima">
                        En ik ben
                    </span>
                </div>
                 <div class="words">
                    <span class="change ima">
                        een designer
                    </span>
                </div>
            </div>
            <div class="homepagebutton">
                <a href="/courses">
                    <button class="btn waves-effect waves-light default-btn homepage-btn">Naar Vakken!
                        <i class="material-icons right">send</i>
                    </button>
                </a>
            </div>
        </div>

    </section>
    <script>
        {{-- Alles tot aan een
        designer komt van mezelf
        af. De rest zijn allemaal
        van mensen waar ik het
        aan gevraagd heb.--}}
        var words = [
            'een developer',
            'een student',
            'een gamer',
            'een gitarist',
            'creatief',
            'een designer',
            'klunsig',
            'sociaal',
            'lang',
            'eigenwijs',
            'sarcastisch',
            'gemotiveerd',
            'leergierig',
            'zelfstandig',
            'aardig?',
            'loyaal',
            'hard werkend',
            'Shrek',
            'vriendelijk',
            'Jeff',
            'ervaren',
            'een grappenmaker',
            'een sfeerbrenger',
            'een fixer',
            'behulpzaam',
            'betrouwbaar',
            'een leider',
            'een memelord'
        ];

        var getRandomWord = function () {
            return words[Math.floor(Math.random() * words.length)];
        };
        $(function () { // after page load
            setInterval(function () {
                $('.change').fadeOut(500, function () {
                    $(this).html(getRandomWord()).fadeIn(500);
                });
                // 5 seconds
            }, 3000);
        });
    </script>
@endsection
