<?php

use Illuminate\Support\Facades\Route;

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

Route::get('lang/{lang}',
	[
		'as' => 'lang.switch',
		'uses' => 'App\Http\Controllers\LanguageController@switchLang'
	]
);

Route::get('/', function () {
    return view('main');
});

Route::get('/fashion_illustrations', function () {
	return view('fashion_illustrations');
});

Route::get('/landscapes', function () {
	return view('landscapes');
});

Route::get('/graphics', function () {
	return view('graphics');
});

Route::get('/education', function () {
	return view('education');
});

Route::get('/master_classes', function () {
	return view('master_classes');
});

Route::get('/about', function() {
	return view('about');
});

Route::get('/user/{id}/{name}', function($id, $name){
	return 'ID: '. $id.'. Name: '.$name;
});