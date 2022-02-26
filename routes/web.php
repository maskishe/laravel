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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function ($id) {
    return 'Hello, '.$id;
});

Route::get('/welcome', function () {
    return 'Welcome';
});

Route::get('/info', function () {
    return 'Info';
});

Route::get('/news', function () {
    return 'News';
});
