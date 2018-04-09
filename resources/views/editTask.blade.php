{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
    Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
    <div class="container">
        <form method="POST" action="">
            {{ csrf_field() }}
            <div class="row">
                <h2>Edit</h2>
                <div class="col s6">
                    <label for="title">Titel:</label>

                    <input type="text" name="title" title="title" value="{{$textContent->title}}"/>
                </div>
                <div class="col s6">
                    <label for="course">Course:</label>
                    <input type="text" name="course" title="course" value="{{$textContent->course}}"/>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <label for="week">Week:</label>
                    <input type="number" name="week" title="week" value="{{$textContent->week}}"/>
                </div>
                <div class="col s4">
                    <label for="sprint">Sprint:</label>
                    <input type="number" name="sprint" title="sprint" value="{{$textContent->sprint}}"/>
                </div>
                <div class="col s4">
                    <label for="proudness">Proudness:</label>
                    <input type="number" name="proudness" title="proudness" value="{{$textContent->proudness}}"/>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label for="photopath">Photo path:</label>
                    <input type="text" name="photopath" title="photopath" value="{{$textContent->photopath}}"/>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <label for="content">Content:</label>
                    <textarea id="content" placeholder="Opdracht hier" name="content" class="contentTextArea" label="content" title="content"> {!! $textContent->textContent !!} </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <button class="btn waves-effect waves-light default-btn" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
            @include ('errorcheck')
        </form>
        <script>
          CKEDITOR.replace( 'content' );
        </script>
    </div>
@endsection
