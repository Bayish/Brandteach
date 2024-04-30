<?php

use App\Http\Controllers\DirectMessageController;
use App\Http\Controllers\Storefront\HomepageController;
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

Route::get('/', [HomepageController::class, 'index']);

Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Dashboard');
})->name('dashboard');


;




