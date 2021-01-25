<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Htpp\Controllers\NavigationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NavigationController as ControllersNavigationController;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    //
    Route::prefix('admin')->group(function () {
        //
        Route::get('/', [AdminController::class, 'show'])->name('admin');   
        //
        Route::group(['prefix' => 'navigation'], function () {
            //
            Route::get('/manage', function () {
                return Inertia\Inertia::render('Admin/Navigation/Manage');
            })->name('NavManage');
            //
            Route::post('/create',[ControllersNavigationController::class,'create'])->name('createNav');
        });
    }); 
});

/* Route::prefix('noibo')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
}); */


/* Route::get('/', function () {
    return Inertia\Inertia::render('HomePage');
})->name('homepage'); */

Route::get('/', [HomePageController::class, 'show'])->name('homepage');
