<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::controller(HomeController::class)->group(function(){

    Route::get('products','productList')->name('product.list');
    Route::get('profile','adminProfile')->name('user.profile');

});
