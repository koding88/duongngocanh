<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CartController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\User\CartsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
   
    Route::resource('/cart', CartsController::class);


    Route::get('/cart', [CartsController::class, 'cart'])->name('cart');
    Route::post('/cart/add/{id}', [CartsController::class, 'addCart'])->name('cart.add');
    Route::delete('/cart/{id}', [CartsController::class, 'remove'])->name('cart.remove');


    Route::get('/checkout', 'App\Http\Controllers\User\CheckoutController@index')->name('checkout.index');
});



Route::get('/', [UserController::class, 'index']);

Route::get('/news', [UserController::class, 'news']);

Route::get('/shop', [UserController::class, 'shop']);

Route::get('/product/detail/{id}', [UserController::class, 'showProduct']);

Route::get('/new/detail/{id}', [UserController::class, 'showNew']);

Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');