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

Route::get('/', action:'App\Http\Controllers\MainController@home');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');
Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');

Route::get('/travel', function () {
    return view('travel');
});

Route::get('/sport', function () {
    return view('sport');
});

Route::get('/hobby', function () {
    return view('hobby');
});

Route::get('/study', function () {
    return view('study');
});

Route::get('/science', function () {
    return view('science');
});