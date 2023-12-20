<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterFormController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('login');
})->name('login-route');

Route::get('/registration', function () {
    return view('register');
})->name('register-route');



Route::post('/submit-registration', [RegisterFormController::class,'registration'])->name('submit-registration');
Route::post('/submit-login', [LoginController::class,'login'])->name('submit-login');

Route::get('/home', [LoginController::class,'home'])->name('go-home');

