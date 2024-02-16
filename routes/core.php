<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
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


Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/course', [CourseController::class, 'index'])->name('course');




