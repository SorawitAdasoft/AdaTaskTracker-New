<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

// Route::middleware(['auth', 'verified'])->group(function () {
Route::prefix('/auth')->group(function () {
    Route::resource('/login', AuthController::class)->names('auth');
    Route::resource('/logout', AuthController::class)->names('auth');
});
