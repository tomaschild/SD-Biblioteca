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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/upload_test', function() {
	return view('upload_test');
})->name('upload_test');

Route::get('/results', ['uses' => 'DocumentController@search'])->name('results');

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', ['uses' => 'DocumentController@store'])->name('upload'); 