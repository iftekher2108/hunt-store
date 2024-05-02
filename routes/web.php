<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function(){
    Route::controller(RoleController::class)->group(function(){
        Route::get('role','index')->name('role.index');
        Route::get('role/create','create')->name('role.create');
    });
});



Route::controller(HomeController::class)->group(function(){

    Route::get('products','productList')->name('product.list');
    Route::get('profile','adminProfile')->name('user.profile');

});
