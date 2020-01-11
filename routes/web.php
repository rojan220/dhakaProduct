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

use App\Events\UserRegistered;

Auth::routes();
Route::group(['namespace'=>'Pages'],function(){
    Route::get('/category', 'CategoryController@index');
    Route::get('/cart', 'CartController@index');
});
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/product/{id}', function ($id) {
    $product = \App\Models\Product::find($id);
    if($product->exists())
        return view('pages.product',compact('product'));
    else
        return view('404');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/about', function () {
    return view('pages.about');
});



Route::group(['middleware' => 'can:accessAdmin','prefix'=>'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::get('search/{table}','SearchController@search');
    Route::resource('category','CategoryController');
    Route::resource('product','ProductController');
    Route::resource('purchase','PurchaseController');
});
Route::group(['middleware' => 'can:accessPurchase'], function () {
    Route::post('/makepurchase','CheckoutController@store');
    Route::post('/checkout','CheckoutController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::get('/checkout', function () {
        return view('pages.checkout');
    });
});

