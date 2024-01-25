<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    Route::group(['middleware' => 'auth.admin'], function () {
        Route::get('/dashboard', [TeacherController::class, 'index'])->name('admin.dashboard');
        Route::get('/teachers', [TeacherController::class, 'index'])->name('admin.teachers');
        Route::get('/companies', [TeacherController::class, 'index'])->name('admin.companies');
    });
});


