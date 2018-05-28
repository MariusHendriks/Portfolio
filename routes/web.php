<?php
use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/404', function () {
    return view('404');
})->name('404');


Route::get('/courses', ['uses' => 'CoursesController@index']);
Route::get('/courses/add/', ['uses' => 'AddTaskController@create', 'as' => 'addTask']);
Route::post('/courses/add/', ['uses' => 'AddTaskController@store', 'as' => 'addTask']);
Route::get('/courses/{course}', ['uses' => 'CourseController@index']);
Route::get('/courses/{course}/{task}', ['uses' => 'TaskController@index', 'as' => 'taskIndex']);
Route::get('/courses/{course}/{title}/edit', ['uses' => 'EditTaskController@index']);
Route::post('/courses/{course}/{title}/edit', ['uses' => 'EditTaskController@store']);
Route::get('/courses/{course}/{title}/delete', ['uses' => 'EditTaskController@delete']);
Route::get('/me', ['uses' => 'MeController@index']);
Route::get('/php', ['uses' => 'PhpExample@index']);


Route::get('/logout', ['uses' => 'HomeController@logout']);
Route::get('/courses/{course}/{title}', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
