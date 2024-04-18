<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Livewire\LoginForm;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/register', 'index')->name('register');
        // Route::post('/register', 'register');
    });
    Route::get('/login', AuthController::class)->name('login');
    // Route::controller(AuthController::class)->group(function () {
    //     Route::get('/login', 'index');
    // });
});

Route::middleware('auth')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('products');
    });
});