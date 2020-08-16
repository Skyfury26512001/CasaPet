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

//USER
/* Home */
Route::get('/', function () {
    return view('home');
});


/* Error */
Route::get('/error', function () {
    return view('error');
});


/* 1.Services */
Route::get('/services', function () {
    return view('services.services');
});

Route::get('/rescue', function () {
    return view('services.rescue');
});

Route::get('/adoption', function () {
    return view('services.adoption');
});

Route::get('/concession', function () {
    return view('services.concession');
});


/* 2.Store */
Route::get('/shop', function () {
    return view('store.shop');
});

Route::get('/pet_care', function () {
    return view('store.pet_care');
});


/* 3.Blog */
Route::get('/timeline', function () {
    return view('blog.timeline');
});

Route::get('/news', function () {
    return view('blog.news');
});


/* 4.About */
Route::get('/about', function () {
    return view('about.about');
});

Route::get('/team', function () {
    return view('about.team');
});


/* 5.Contact */
Route::get('/contact', function () {
    return view('contact.contact');
});

/* 6.Donation */
Route::get('/donation', function () {
    return view('donation.donation');
});

// admin : route

Route::group(['middleware' => ['role_check'], 'prefix' => 'admin'], function () {
    Route::get('/','AdminController@dashboard')->name('admin');
    Route::group(['prefix' => '/accounts'], function () {
        Route::get('/', 'AccountController@list')->name('admin_account_list');
        Route::get('/create', 'AccountController@create')->name('admin_account_create');
        Route::post('/store', 'AccountController@store')->name('admin_account_store');
        Route::get('/edit/{slug}', 'AccountController@edit')->name('admin_account_edit');
        Route::get('/detail/{slug}', 'AccountController@detail')->name('admin_account_detail');
        Route::put('/update/{slug}', 'AccountController@update')->name('admin_account_update');
        Route::put('/deactive/{id}', 'AccountController@deactive')->name('admin_account_deactive');
        Route::put('/active/{id}', 'AccountController@active')->name('admin_account_active');
        Route::put('/deactiveAll', 'AccountController@deactive_multi')->name('admin_account_deactive_multi');
        Route::put('/activeAll', 'AccountController@active_multi')->name('admin_account_active_multi');
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
