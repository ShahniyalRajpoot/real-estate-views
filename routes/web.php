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


Route::middleware('verify_api_csrf')->group(function (){
    Route::get('/logout', [LoginController::class,'logout'])->name('logout');

    Route::get('/welcome-dashboard', [LoginController::class,'home'])->name('dashboard-w');
    Route::get('/listing/{id}', [LoginController::class,'listingDetail'])->name('listing-d');
    Route::get('/feature-listing', [LoginController::class,'featureListing'])->name('listing-f');
    Route::get('/profile-setting', [LoginController::class,'profileSetting'])->name('p-setting');
    Route::post('/save-profile-setting', [LoginController::class,'SaveProfileSettings'])->name('save-p-setting');
    Route::get('/featured-check/{id}', [LoginController::class,'doFeatured'])->name('featured-checkss');
    Route::get('/create-listing', [LoginController::class,'createListView'])->name('create-listing');

});


