<?php
use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/courses', ['uses' => 'CoursesController@index']);
Route::get('/courses/{course}/{week}/edit', ['uses' => 'CourseEditController@index', 'as' => 'courseEdit']);
Route::post('/courses/{course}/{week}/edit', ['uses' => 'CourseEditController@store', 'as' => 'courseEdited']);
Route::get('/courses/{course}', ['uses' => 'CourseController@index']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses/{course}/add/', ['uses' => 'AddWeekController@index', 'as' => 'addWeek']);