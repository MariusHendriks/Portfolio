{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
    Edit Course
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')

    <form method="post">
        {{-- Beveiliging ((https://laravel.com/docs/5.6/csrf#csrf-x-csrf-token)) --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col s12">
                <h5>HTML Huidige text</h5>
                <textarea id="oldText" name="oldText" class="textEdit" label="editfield" title="editfield">
                    {!! trim($coursesText->textContent) !!}
                </textarea>
            </div>
        </div>
        <div class="row">
            <div id="newText" class="col s12">
                test
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button class="btn waves-effect waves-light default-btn" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
@endsection
@section('Javascript')
    <script type="text/javascript">
        function CopyText() {
            $('#newText').html($('#oldText').val().trim())
        }

        CopyText();
        document.getElementById('oldText').onkeyup = CopyText;
    </script>
@endsection