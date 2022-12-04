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
})->name('main');

Route::get('/my_work/fashion_illustrations', function () {
	return view('my_work/fashion_illustrations');
})->name('fashion_illustrations');

Route::get('/my_work/landscapes', function () {
	return view('my_work/landscapes');
})->name('landscapes');

Route::get('/my_work/graphics', function () {
	return view('my_work/graphics');
})->name('graphics');

Route::get('/education', function () {
	return view('education');
})->name('education');

Route::get('/master_classes', function () {
	return view('master_classes');
})->name('master_classes');

Route::get('/about', function() {
	return view('about');
})->name('about');

// Route::get('/user/{id}/{name}', function($id, $name){
// 	return 'ID: '. $id.'. Name: '.$name;
// })->name('');