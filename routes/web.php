<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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

Route::get('/about', function () {
    return view('frontpage.about');
});

Route::get('/contact', function () {
    return view('frontpage.contact');
});

Route::get('/login', function () {
    return view('login.index');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('penjual');

Route::resource('/dashboard/stock', ProductController::class)->middleware('penjual');
Route::get('/shop/{product:id}', [ProductController::class, 'show'])->middleware('auth');
Route::get('/shop', [ProductController::class, 'shop'])->middleware('auth');
Route::get('/', [ProductController::class, 'home'])->middleware('auth');
