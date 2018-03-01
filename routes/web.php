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
    return view('front.home');
});

Route::get('/search', function () {
    return view('front.search');
});

Route::get('/about-us', function () {
    return view('front.about');
});

Route::get('/directory', function () {
    return view('front.directory');
});

Route::get('/ecolife', function () {
    return view('front.ecolife');
});

Route::get('/labels', function () {
    return view('front.label');
});

