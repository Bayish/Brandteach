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

Route::group(['prefix' => 'student', 'namespace' => 'student'], function () {
    Route::group(['middleware' => 'auth.teacher'], function () {
        Route::get('/dashboard', [TeacherController::class, 'index'])->name('student.dashboard');
        Route::get('/students', [TeacherController::class, 'index'])->name('student.groups');
    });
});


