<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

//De route geeft de juiste pagina weer, in dit geval zoekt hij naar de welcome pagina
Route::get('/', function () {
	return view('index');
});
/*
Route::get('/week/{week}', function () {
	$vakinfo = DB::table('website_texts')->where('course', '=','SCO')->where('week', '=', '1')->get();

    return $vakinfo;


    	//ik kan hier variabelen maken en via compact teruggeven naar mijn view.
	$age = 4;
	$name = 'Marius';

	//list test
	$tasks = [
		'Leer laravel',
		'Master laravel',
		'Leer laravel met databases'
	];

	//$vakinfo = DB::table('website_texts')->get();
	$vakinfo = DB::table('website_texts')->latest()->where('course', '=','SCO')->get();

	//met Compact kan ik variabelen terugsturen
	return view('welcome', compact('age', 'name', 'tasks', 'vakinfo'));

	//with geeft aan dat als ik nu $name invul dat het woord World tevoorschijn komt. 
    //return view('welcome')->with('name', 'World');
});
*/
Route::resource('courses', 'CoursesController');
Route::resource('courses/{course}', 'CourseController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

