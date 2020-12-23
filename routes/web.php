<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard'); */
Route::domain('admin.localhost')->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/', function () {
            return Inertia\Inertia::render('Admin/Admin');
        })->name('adminpage');
    });
});

Route::domain('noibo.localhost')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});


/* Route::get('/', function () {
    return Inertia\Inertia::render('HomePage');
})->name('homepage'); */

Route::get('/', [HomePageController::class, 'show'])->name('homepage');
