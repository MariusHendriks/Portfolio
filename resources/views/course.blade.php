{{-- Zorgt ervoor dat je de 'main' verder bouwd main.blade.php --}}
@extends('main')

{{-- Veranderd de titel van courses met de blade-manier van laravel --}}
@section('title')
    Courses
@endsection

{{-- Zorgt ervoor dat er doorgebouwd word op de plaats van @yield van de main.blade.php --}}
@section('Main')
    @foreach($textContent as $course)
        <div class="row courserow">
            <div class="col s2 weekNumber">
                Week {{ $course->week }}
            </div>
            @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1)
                <div class="offset-s1 col s8">
                    {!! $course->textContent !!}
                    <hr class="textline">
                </div>
                <div class="col s1">
                    <a href="{{route('courseEdit', ['course' => $course->course,'week' => $course->week])}}">
                        <i class="material-icons editpencil">mode_edit</i>
                    </a>
                </div>
            @else
                <div class="offset-s1 col s9">
                    {!! $course->textContent !!}
                    <hr class="textline">
                </div>
            @endif
        </div>
    @endforeach
    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()==1)
        <div class="row">
            <div class="col offset-s3 s9">
                <a href="{{route('addWeek', ['course' => $course->course,'week' => $course->week])}}">
                    <button class="btn waves-effect waves-light default-btn" type="submit" name="action">Add
                        <i class="material-icons right">send</i>
                    </button>
                </a>
            </div>
        </div>
    @endif
@endsection