<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RestaurantController;

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


Route::get('/', ([HomeController::class, 'index']));

Route::get('/redirects', ([HomeController::class, 'redirects']));

Route::get('users',[AdminController::class,'users']);

Route::get('/restaurant',[AdminController::class,'restaurant']);

Route::get('/category',[AdminController::class,'category']);

Route::post('/uploadcategory',[AdminController::class,'categorystore']);

Route::get('/food',[AdminController::class,'food']);

Route::post('/uploadfood',[AdminController::class,'uploadfood']);

Route::post('/uploadrest',[AdminController::class,'uploadrest']);

Route::post('/findMatching',[RestaurantController::class,'searchRestaurants']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
