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
})->name('home');

// admin : route

Route::group(['middleware' => ['role_check'], 'prefix' => 'admin'], function () {
    Route::get('/','AdminController@dashboard')->name('admin');
    Route::group(['prefix' => '/accounts'], function () {
        Route::get('/', 'AccountController@list')->name('admin_account_list');
        Route::get('/create', 'AccountController@create')->name('admin_account_create');
        Route::post('/store', 'AccountController@store')->name('admin_account_store');
//        Route::get('/edit/{slug}', 'AccountController@edit')->name('admin_account_edit');
//        Route::put('/update/{id}', 'AccountController@update')->name('admin_account_update');
//        Route::put('/delete/{id}', 'AccountController@delete')->name('admin_account_delete');
//        Route::put('/deleteAll', 'AccountController@delete_multi')->name('admin_account_delete_multi');
    });
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