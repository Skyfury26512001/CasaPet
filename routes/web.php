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
// user : route
Route::get('/', function () {
    return view('welcome');
});

// admin : route

Route::group(['middleware' => ['role_check'], 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        dd('admin_page');
    })->name('admin');
});
// login - register : route

Route::get('/login','AccountController@login')->name('login');
Route::post('/login','AccountController@loginP')->name('loginP');
Route::get('/regist','AccountController@regist');
Route::post('/regist','AccountController@registP');

// test : route
Route::get('checking_page', function () {
    return view('session_checking');
});