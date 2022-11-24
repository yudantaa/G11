<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\UsersController;

// public page controller
Route::controller(PublicPageController::class)->group(function(){
    Route::get('/', 'index')->name('landing.index');
    Route::get('/about', 'aboutIndex')->name('about');
    Route::get('/contact', 'contactIndex')->name('contact');
    Route::get('/term', 'termIndex')->name('term');
    Route::get('/donate', 'donationIndex')->name('donation');
});

// MealsController
Route::resource('meal', MealsController::class)->middleware('roles:Admin');

// UsersController
Route::resource('user', UsersController::class)->middleware('roles:Admin');

// authentication route
Route::controller(AuthController::class)->group(function () {
    Route::prefix('login')->middleware('guest')->group(function () {
        Route::get('/', 'index')->name('login');
        Route::post('/', 'authenticate')->name('login.authenticate');
    });
    Route::prefix('register')->middleware('guest')->group(function(){
        Route::get('/', 'register_index')->name('register.index');
        Route::post('/', 'store_register')->name('register.store');
    });
    Route::post('/logout', 'logout')->name('logout');
   
});

// admin route
Route::get('/admin/dashboard', function () {
    return view('components.admin');
})->middleware('roles:Admin')->name('admin.dashboard');

// dashboard user route
Route::get('/user/dashboard', function () {
    return view('components.dashboard_user');
})->middleware('roles:Member,Caregiver,Volunteer')->name('user.dashboard');
