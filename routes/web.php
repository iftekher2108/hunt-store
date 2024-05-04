<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CatagoryController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function(){
    Route::controller(RoleController::class)->group(function(){
        Route::get('/role','index')->name('role.index');
        Route::get('/role/create','create')->name('role.create');
    });

    Route::controller(CatagoryController::class)->group(function(){
        Route::get('/catagory','index')->name('catagory.index');
        Route::get('/catagory/create','create')->name('catagory.create');
        Route::post('/catagory/store','store')->name('catagory.store');

        Route::get('catagory/{id}','delete')->name('catagory.delete');
    });
});



Route::controller(HomeController::class)->group(function(){

    Route::get('/product','productList')->name('product.list');
    Route::get('/profile','adminProfile')->name('user.profile');

});
