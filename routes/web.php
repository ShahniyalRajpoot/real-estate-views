<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterFormController;
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
});

Route::get('/registeration', function () {
    return view('register');
});

Route::post('/submit-registration', [RegisterFormController::class,'registration'])->name('submit-registration');
