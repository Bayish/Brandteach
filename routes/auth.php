<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'show'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.save');
});


