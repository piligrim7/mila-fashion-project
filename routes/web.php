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
    return view('main.index');
})->name('main');

Route::get('/my_work/fashion_illustrations', function () {
	return view('my_work.fashion_illustrations.index');
})->name('fashion_illustrations');

Route::get('/my_work/landscapes', function () {
	return view('my_work.landscapes.index');
})->name('landscapes');

Route::get('/my_work/graphics', function () {
	return view('my_work.graphics.index');
})->name('graphics');

Route::get('/education', function () {
	return view('education.index');
})->name('education');

Route::get('/master_classes', function () {
	return view('master_classes.index');
})->name('master_classes');

Route::get('/about', function() {
	return view('about.index');
})->name('about');

Route::get('/login', function () {
	return view('login.index');
})->name('login');

Route::get('/register', function () {
	return view('register.index');
})->name('register');
// Route::get('/user/{id}/{name}', function($id, $name){
// 	return 'ID: '. $id.'. Name: '.$name;
// })->name('');