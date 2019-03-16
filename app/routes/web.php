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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('MunnuBhai');
});
Route::get('/MunnuBhai', function () {
    return view('MunnuBhai');
});
Route::get('/Start_Checkup',function(){
	return view('Start_Checkup');
});
Route::get('/diabeties',function(){
	return view('diabeties');
});
Route::get('/About',function(){
	return view('About');
});
Route::get('/pneumonia',function(){
	return view('pneumonia');
});
Route::post('/diabeties_backend','Controller@diabeties_backend');
