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

Route::get('/', 'AuthController@form')->name('form');
Route::post('login', 'AuthController@attemptLogin')->name('login');

Route::get('dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard')->middleware('auth');
