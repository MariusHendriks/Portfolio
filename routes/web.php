<?php
use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/courses', ['uses' => 'CoursesController@index']);
Route::get('/courses/{course}', ['uses' => 'CourseController@index']);
Route::get('/courses/{course}/{task}', ['uses' => 'TaskController@index', 'as' => 'taskindex']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/', ['uses' => 'AddWeekController@create', 'as' => 'addWeek']);
Route::get('/php/', ['uses' => 'PhpExample@index']);


Route::get('/courses/{course}/{week}/edit', ['uses' => 'CourseEditController@index', 'as' => 'courseEdit']);
Route::post('/courses/{course}/{week}/edit', ['uses' => 'CourseEditController@store', 'as' => 'courseEdited']);
Route::get('/courses/{course}/{week}/', ['uses' => 'AssignmentController@index', 'as' => 'assignment']);
