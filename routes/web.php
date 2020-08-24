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

/* Home */
Route::get('/', function () {
    return view('user.home');
})->name('home');


/* Sub Pages */
Route::get('/error', function () {
    return view('user.sub_pages.error');
});

Route::get('/success', function () {
    return view('user.sub_pages.success');
})->name('success');

Route::get('/get_involved', function () {
    return view('user.sub_pages.get_involved');
});

/* 1.Services */
Route::get('/services', function () {
    return view('user.services.services');
});

Route::get('/rescue', function () {
    return view('user.services.rescue');
});

Route::get('/adoption', function () {
    return view('user.services.adoption');
});

Route::get('/adoption/adoption_detail', function () {
    return view('user.services.adoption_detail');
});

Route::get('/concession', function () {
    return view('user.services.concession');
});


/* 2.Store */
Route::get('/shop', function () {
    return view('user.store.shop');
});

Route::get('/pet_care', function () {
    return view('user.store.pet_care');
});


/* 3.Blog */
Route::get('/news', function () {
    return view('user.blog.news');
});


/* 4.About */
Route::get('/about', function () {
    return view('user.about.about');
});

Route::get('/team', function () {
    return view('user.about.team');
});


/* 5.Contact */
Route::get('/contact', function () {
    return view('user.contact.contact');
})->name('contact');

Route::get('/mail_send', 'SendMailController@sendMail');

Route::post('/mail_send_post', 'SendMailController@sendMail')->name('send_contact_mail');

/* 6.Donation */
Route::get('/donation', function () {
    return view('user.donation.donation');
});

Route::post('/donation', 'DonationController@store')->name('donation');

Route::get('/donate_guide', function () {
    return view('user.donation.donate_guide');
});

/* 7.Login-Register */
Route::get('/login_register', function () {
    return view('user.login_register');
});

// admin : route

Route::group(['middleware' => ['role_check'], 'prefix' => 'admin'], function () {

    Route::get('/', 'AdminController@dashboard')->name('admin_home');
    Route::get('/404', function () {
        return view('admin.404-admin');
    })->name('admin_404');
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
//        Route::get('/edit/{id}', 'ContractController@edit')->name('admin_contract_edit');
        Route::get('/detail/{id}', 'ContractController@detail')->name('admin_contract_detail');
//        Route::put('/update/{id}', 'ContractController@update')->name('admin_contract_update');
        Route::put('/deactive/{id}', 'ContractController@end')->name('admin_contract_end');
        Route::put('/active/{id}', 'ContractController@start')->name('admin_contract_start');
//        Route::put('/deactiveAll', 'ContractController@deactive_multi')->name('admin_contract_deactive_multi');
//        Route::put('/activeAll', 'ContractController@active_multi')->name('admin_contract_active_multi');
    });
    Route::group(['prefix' => '/orders'], function () {
        Route::get('/', 'OrderController@list')->name('admin_order_list');
        Route::get('/create', 'OrderController@create')->name('admin_order_create');
        Route::post('/store', 'OrderController@store')->name('admin_order_store');
        Route::get('/edit/{id}', 'OrderController@edit')->name('admin_order_edit');
        Route::get('/detail/{id}', 'OrderController@detail')->name('admin_order_detail');
        Route::put('/update/{id}', 'OrderController@update')->name('admin_order_update');
        Route::post('/acept/{id}', 'OrderController@acept')->name('admin_order_acept');
        Route::post('/decline/{id}', 'OrderController@decline')->name('admin_order_decline');
//        Route::put('/deactiveAll', 'OrderController@deactive_multi')->name('admin_order_deactive_multi');
//        Route::put('/activeAll', 'OrderController@active_multi')->name('admin_order_active_multi');
    });
    Route::group(['prefix' => '/posts'], function () {
        Route::get('/', 'PostController@list')->name('admin_post_list');
        Route::get('/create', 'PostController@create')->name('admin_post_create');
        Route::post('/store', 'PostController@store')->name('admin_post_store');
        Route::get('/edit/{slug}', 'PostController@edit')->name('admin_post_edit');
        Route::get('/detail/{slug}', 'PostController@detail')->name('admin_post_detail');
        Route::put('/update/{slug}', 'PostController@update')->name('admin_post_update');
        Route::put('/deactive/{id}', 'PostController@deactive')->name('admin_post_deactive');
        Route::put('/active/{id}', 'PostController@active')->name('admin_post_active');
        Route::put('/deactiveAll', 'PostController@deactive_multi')->name('admin_post_deactive_multi');
        Route::put('/activeAll', 'PostController@active_multi')->name('admin_post_active_multi');
    });
});
// login - register : route

//Route::get('/login', 'AccountController@login')->name('login');
//Route::post('/login', 'AccountController@loginP')->name('loginP');
//Route::get('/regist', 'AccountController@regist');
//Route::post('/regist', 'AccountController@registP');

// test : route
Route::get('checking_page', function () {
    return view('session_checking');
});

/* Logout  */
Route::get('/logOut', 'AccountController@logOut')->name('logOut');


/* 7.Time Line */
Route::get('/timeline', function () {
    return view('timeline');
});
