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
    return view('index');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/download', function () {
    return view('downloads');
});

Route::get('/ranking', function () {
    return view('ranking');
});