<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
// Route::get('/register', function () {
//     return view('auth.register', [
//         "title" => "register"
//     ]);
// });
// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// logout
Route::post('/logout', [LoginController::class, 'logout']);
// dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');
Route::get('/profile', function () {
    return view('dashboard.profile', [
        "title" => "Profile"
    ]);
})->middleware('auth');
Route::get('/edit-profile', function () {
    return view('dashboard.edit-profile', [
        "title" => "Edit Profile"
    ]);
})->middleware('auth');
Route::post('/edit-profile', [UserController::class, 'update'])->middleware('auth');
