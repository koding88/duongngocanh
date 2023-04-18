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


    // Route::get('/brands','App\Http\Controllers\Admin\BrandController@index');

    // Route::post('/add-brands','App\Http\Controllers\Admin\BrandController@store');

    // Route::get('/brands-edit/{id}', 'App\Http\Controllers\Admin\BrandController@brandedit');

    // Route::post('/brands-update/{id}', 'App\Http\Controllers\Admin\BrandController@brandupdate');

    // Route::delete('/brands-delete/{id}', 'App\Http\Controllers\Admin\BrandController@branddelete');


    // News Router
    Route::get('admin/news', [App\Http\Controllers\Admin\NewsController::class, 'index']);
    Route::get('admin/news/create', [App\Http\Controllers\Admin\NewsController::class, 'create']);

    // Category
    Route::resource('admin/categories', CategoryController::class);

    // Product
    Route::resource('admin/products', ProductsController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/news', function () {
    return view('pages.news');
});

Route::get('/shop', function () {
    return view('pages.shop');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/product/detail', function () {
    return view('pages.detail_product');
});

Route::get('/news/detail', function () {
    return view('pages.detail_news');
});
