<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MyHomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Public routes
Route::get('/',[MyHomeController::class,'index'])->name('welcome');
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login',[AdminController::class,'login'])->name('login');

// Authentication routes
Auth::routes();

// Admin routes
Route::get('/admins',[AdminController::class,'index'])->middleware('is_admin')->name('admin.dashboard');

// Dashboard route - protected by auth middleware in the controller
Route::get('/home', [HomeController::class, 'index'])->name('home');