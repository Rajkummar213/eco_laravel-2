<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashbord');
Route::prefix('category/')->name('category.')->controller(categoryController::class,)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'index')->name('create');
    Route::post('/store', 'store'->name('store'));


});