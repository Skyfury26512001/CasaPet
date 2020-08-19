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
})->name('home');


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
        Route::get('/password/{slug}', 'AccountController@change_password')->name('admin_account_change_password');
        Route::put('/password/{slug}', 'AccountController@change_passwordP')->name('admin_change_password');
    });
    Route::group(['prefix' => '/pets'], function () {
        Route::get('/', 'PetController@list')->name('admin_pet_list');
        Route::get('/create', 'PetController@create')->name('admin_pet_create');
        Route::post('/store', 'PetController@store')->name('admin_pet_store');
        Route::get('/edit/{slug}', 'PetController@edit')->name('admin_pet_edit');
        Route::get('/detail/{slug}', 'PetController@detail')->name('admin_pet_detail');
        Route::put('/update/{slug}', 'PetController@update')->name('admin_pet_update');
        Route::put('/deactive/{id}', 'PetController@deactive')->name('admin_pet_deactive');
        Route::put('/active/{id}', 'PetController@active')->name('admin_pet_active');
        Route::put('/deactiveAll', 'PetController@deactive_multi')->name('admin_pet_deactive_multi');
        Route::put('/activeAll', 'PetController@active_multi')->name('admin_pet_active_multi');
    });
    Route::group(['prefix' => '/contracts'], function () {
        Route::get('/', 'ContractController@list')->name('admin_contract_list');
        Route::get('/create', 'ContractController@create')->name('admin_contract_create');
        Route::post('/store', 'ContractController@store')->name('admin_contract_store');
        Route::get('/edit/{slug}', 'ContractController@edit')->name('admin_contract_edit');
        Route::get('/detail/{slug}', 'ContractController@detail')->name('admin_contract_detail');
        Route::put('/update/{slug}', 'ContractController@update')->name('admin_contract_update');
        Route::put('/deactive/{id}', 'ContractController@deactive')->name('admin_contract_deactive');
        Route::put('/active/{id}', 'ContractController@active')->name('admin_contract_active');
        Route::put('/deactiveAll', 'ContractController@deactive_multi')->name('admin_contract_deactive_multi');
        Route::put('/activeAll', 'ContractController@active_multi')->name('admin_contract_active_multi');
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
