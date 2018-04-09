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
                <h2>Add</h2>
                <div class="col s6">
                    <label for="title">Titel:</label>
                    <input type="text" name="title" title="title"/>
                </div>
                <div class="col s6">
                    <label for="course">Course:</label>
                    <input type="text" name="course" title="course"/>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <label for="week">Week:</label>
                    <input type="number" name="week" title="week"/>
                </div>
                <div class="col s4">
                    <label for="sprint">Sprint:</label>
                    <input type="number" name="sprint" title="sprint"/>
                </div>
                <div class="col s4">
                    <label for="proudness">Proudness:</label>
                    <input type="number" name="proudness" title="proudness"/>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="input-group">
                       <span class="input-group-btn">
                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose thumbnail
                         </a>
                       </span>
                        <input id="thumbnail" class="form-control" type="hidden" name="filepath">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <label for="content">Content:</label>
                    <textarea id="content" class="form-control" placeholder="Opdracht hier" name="content"
                              class="contentTextArea" label="content" title="content"></textarea>
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
        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
        <script>
            $('#lfm').filemanager('image');

            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };
            CKEDITOR.replace('content', options);

        </script>
    </div>
@endsection
