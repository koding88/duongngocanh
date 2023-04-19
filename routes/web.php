<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoryController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\NewsController;
=======
use Gloudemans\Shoppingcart\Facades\Cart;
>>>>>>> d2340fae09454894fd207ca1c005a74e70b2fd31
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CheckoutController;

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

<<<<<<< HEAD

    // Route::get('/brands','App\Http\Controllers\Admin\BrandController@index');

    // Route::post('/add-brands','App\Http\Controllers\Admin\BrandController@store');

    // Route::get('/brands-edit/{id}', 'App\Http\Controllers\Admin\BrandController@brandedit');

    // Route::post('/brands-update/{id}', 'App\Http\Controllers\Admin\BrandController@brandupdate');

    // Route::delete('/brands-delete/{id}', 'App\Http\Controllers\Admin\BrandController@branddelete');
    //News
    // Route::get('admin/news', 'App\Http\Controllers\Admin\NewsController@index');
    // Route::get('admin/news/create', 'App\Http\Controllers\Admin\NewsController@create');
    // Route::get('', 'App\Http\Controllers\Admin\NewsController@store');
    // Route::get('admin/news/show/{new}', 'App\Http\Controllers\Admin\NewsController@show');
    // Route::get('admin/news/edit/{new}', 'App\Http\Controllers\Admin\NewsController@edit');
    // Route::put('admi/news/edit/{new}','App\Http\Controllers\Admin\NewsController@update');
    // Route::delete('/{new}','App\Http\Controllers\Admin\NewsController@destroy');
    Route::resource('admin/news', NewsController::class);


    
=======
    // News Router
    // Route::get('admin/news', [App\Http\Controllers\Admin\NewsController::class, 'index']);
    // // Route::post('admin/news/add', [App\Http\Controllers\Admin\NewsController::class, 'store']);
    // Route::get('admin/news-add', [App\Http\Controllers\Admin\NewsController::class, 'store']);
    // Route::get('admin/news-edit/{id}', [App\Http\Controllers\Admin\NewsController::class, 'edit']);
    // Route::post('admin/news-update/{id}', [App\Http\Controllers\Admin\NewsController::class, 'update']);
    // Route::delete('admin/news-delete/{id}', [App\Http\Controllers\Admin\NewsController::class, 'delete']);
    Route::resource('admin/news', NewsController::class);
>>>>>>> d2340fae09454894fd207ca1c005a74e70b2fd31
    // Product
    Route::resource('admin/products', ProductsController::class);
    
    // Categories
    Route::resource('admin/categories', CategoryController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
Route::get('/index', function () {
    return view('pages.home');
    });

Route::get('/about', function () {
    return view('pages.about');
    });
=======
Route::middleware(['auth'])->group(function () {
    // Route::get('/cart', function () {
    //     return view('pages.cart');
    // });
    // Route::get('/checkout', function () {
    //     return view('pages.cart');
    // });
    Route::get('/cart', 'App\Http\Controllers\User\CartController@index')->name('cart.index');
    Route::post('/cart', 'App\Http\Controllers\User\CartController@store')->name('cart.store');
    Route::get('empty', function () {
        Cart::destroy();
    });

    Route::get('/checkout', 'App\Http\Controllers\User\CheckoutController@index')->name('checkout.index');
});

Route::view('/index', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/news', 'pages.news');
Route::view('/shop', 'pages.shop');
Route::view('/contact', 'pages.contact');
Route::view('/product/detail', 'pages.detail_product');
Route::view('/news/detail', 'pages.detail_news');
>>>>>>> d2340fae09454894fd207ca1c005a74e70b2fd31
