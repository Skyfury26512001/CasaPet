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
