<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\User\CartController;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CheckoutController;

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/role-register', 'App\Http\Controllers\Admin\RoleController@registered');

    Route::get('/role-edit/{id}', 'App\Http\Controllers\Admin\RoleController@registeredit');

    Route::put('/role-register-update/{id}', 'App\Http\Controllers\Admin\RoleController@registerupdate');

    Route::delete('/role-delete/{id}', 'App\Http\Controllers\Admin\RoleController@registerdelete');

    //News
    Route::resource('admin/news', NewsController::class);

    // Product
    Route::resource('admin/products', ProductsController::class);
    
    // Categories
    Route::resource('admin/categories', CategoryController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/index', function () {
    return view('pages.home');
    });

Route::get('/about', function () {
    return view('pages.about');
    });
Route::middleware(['auth'])->group(function () {
    // Route::get('/cart', function () {
    //     return view('pages.cart');
    // });
    // Route::get('/checkout', function () {
    //     return view('pages.cart');
    // });
    // Route::get('/cart', 'App\Http\Controllers\User\CartController@index')->name('cart.index');
    // Route::post('/cart', 'App\Http\Controllers\User\CartController@store')->name('cart.store');
    // Route::resource('/cart', CartController::class);
    

    Route::get('/checkout', 'App\Http\Controllers\User\CheckoutController@index')->name('checkout.index');
});

Route::view('/index', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/news', 'pages.news');
Route::view('/shop', 'pages.shop');
Route::view('/contact', 'pages.contact');
Route::view('/product/detail', 'pages.detail_product');
Route::view('/news/detail', 'pages.detail_news');