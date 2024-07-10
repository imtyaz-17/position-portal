<?php

use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobPositionController::class, 'index']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::get('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);
