<?php

use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobPositionController::class, 'index']);
Route::get('/jobs/create', [JobPositionController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobPositionController::class, 'store'])->middleware('auth');
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth');
