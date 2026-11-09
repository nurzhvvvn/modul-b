<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdvertsController;
use App\Http\Controllers\AdvertController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'index'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware('auth:web')->group(function(){
    Route::get('/', [Admincontroller::class, 'index'])->name('admin.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/categories', [CategoriesController::class, 'index'])->name('admin.categories');
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('/adverts', [AdvertsController::class, 'index'])->name('admin.adverts');
    Route::get('/advert', [AdvertController::class, 'index'])->name('admin.advert');
});
