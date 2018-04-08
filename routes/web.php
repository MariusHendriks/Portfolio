<?php
use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/courses', ['uses' => 'CoursesController@index']);
Route::get('/courses/add/', ['uses' => 'AddTaskController@create', 'as' => 'addTask']);
Route::post('/courses/add/', ['uses' => 'AddTaskController@store', 'as' => 'addTask']);
Route::get('/courses/{course}', ['uses' => 'CourseController@index']);
Route::get('/courses/{course}/{task}', ['uses' => 'TaskController@index', 'as' => 'taskIndex']);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/courses/{course}/{title}/edit', ['uses' => 'EditTaskController@index']);
Route::post('/courses/{course}/{title}/edit', ['uses' => 'EditTaskController@store']);

Route::get('/php/', ['uses' => 'PhpExample@index']);


Route::get('/courses/{course}/{week}/edit', ['uses' => 'CourseEditController@index', 'as' => 'courseEdit']);
Route::post('/courses/{course}/{week}/edit', ['uses' => 'CourseEditController@store', 'as' => 'courseEdited']);
Route::get('/courses/{course}/{week}/', ['uses' => 'AssignmentController@index', 'as' => 'assignment']);
