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

Route::get('login', 'FrontEnd\AuthController@login')->name('login-view');
Route::post('loginFunction', 'FrontEnd\AuthController@login')->name('check-credentials');
Route::get('register', 'FrontEnd\AuthController@register')->name('register-view');
Route::post('registerFunction', 'FrontEnd\AuthController@login')->name('register-user');

