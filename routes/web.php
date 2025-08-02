<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;

Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard'); 
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
