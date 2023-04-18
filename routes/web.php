<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/role-register', 'App\Http\Controllers\Admin\RoleController@registered');

    Route::get('/role-edit/{id}', 'App\Http\Controllers\Admin\RoleController@registeredit');

    Route::put('/role-register-update/{id}', 'App\Http\Controllers\Admin\RoleController@registerupdate');

    Route::delete('/role-delete/{id}', 'App\Http\Controllers\Admin\RoleController@registerdelete');

    // News Router
    Route::get('admin/news', [App\Http\Controllers\Admin\NewsController::class, 'index']);
    // Route::post('admin/news/add', [App\Http\Controllers\Admin\NewsController::class, 'store']);
    Route::get('admin/news-add', [App\Http\Controllers\Admin\NewsController::class, 'store']);
    Route::get('admin/news-edit/{id}', [App\Http\Controllers\Admin\NewsController::class, 'edit']);
    Route::post('admin/news-update/{id}', [App\Http\Controllers\Admin\NewsController::class, 'update']);
    Route::delete('admin/news-delete/{id}', [App\Http\Controllers\Admin\NewsController::class, 'delete']);

    // Product
    Route::resource('admin/products', ProductsController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', function () {
        return view('pages.cart');
    });

    Route::get('/checkout', function () {
        return view('pages.checkout');
    });
});

Route::view('/index', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/news', 'pages.news');
Route::view('/shop', 'pages.shop');
Route::view('/contact', 'pages.contact');
Route::view('/product/detail', 'pages.detail_product');
Route::view('/news/detail', 'pages.detail_news');