<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'admin']], function(){
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
    // Route::get('admin/news',[App\Http\Controllers\Admin\NewsController::class,'index']);
    // Route::post('admin/add-news',[App\Http\Controllers\Admin\NewsController::class,'store']);
    // Route::get('admin/news-edit/{id}',[App\Http\Controllers\Admin\NewsController::class,'newscreate']);
    // Route::post('admin/news-update/{id}',[App\Http\Controllers\Admin\NewsController::class,'newsupdate']);
    // Route::delete('admin/news-delete/{id}',[App\Http\Controllers\Admin\NewsController::class,'newsdelete']);
    Route::get('admin/news','App\Http\Controllers\Admin\NewsController@index');

    Route::post('admin/add-news','App\Http\Controllers\Admin\NewsController@store');

    Route::get('admin/news-edit/{id}', 'App\Http\Controllers\Admin\NewsController@newsedit');

    Route::post('admin/news-update/{id}', 'App\Http\Controllers\Admin\NewsController@newsupdate');

    Route::delete('admin/news-delete/{id}', 'App\Http\Controllers\Admin\NewsController@newsdelete');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});