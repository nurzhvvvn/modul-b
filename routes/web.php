<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'index'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('Auth.login');
