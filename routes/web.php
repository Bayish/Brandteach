<?php

use App\Http\Controllers\DirectMessageController;
use App\Http\Controllers\Storefront\HomepageController;
use App\Http\Controllers\Storefront\PartnersPageController;
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

//Route::get('/', function () {
//    return redirect()->route('dashboard');
//});

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/courses', [HomepageController::class, 'index'])->name('courses');
Route::get('/news', [HomepageController::class, 'index'])->name('news');
Route::get('/partners', [PartnersPageController::class, 'index'])->name('partners');
Route::get('/contact', [HomepageController::class, 'index'])->name('contact');

Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Dashboard');
})->name('dashboard');


;




