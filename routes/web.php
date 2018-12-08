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

Auth::routes();

// View Routes
Route::get('/', 'View\HomeViewController@index')->name('home');

// reliefsupports.local/verify?token=$asd.sd&type=user
Route::get('/verify', 'View\PageViewController@verify')->name('verify');