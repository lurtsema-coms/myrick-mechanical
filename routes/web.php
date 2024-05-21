<?php

use App\Http\Controllers\FormResponseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageAccountController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy_policy');

Route::post('/form_response', [FormResponseController::class, 'storeFormResponse'])->name('formResponse.store');
Auth::routes();

Route::middleware(['auth'])->group(function () {
    //Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Manage Account
    Route::get('/manage_account', [ManageAccountController::class, 'index'])->name('manageAccount');
    Route::post('/manage_account', [ManageAccountController::class, 'add'])->name('add_user');

    //Form Response
    Route::get('/form_response', [FormResponseController::class, 'index'])->name('formResponse');
    Route::get('/form_response/{id}/view', [FormResponseController::class, 'view'])->name('viewResponse');

    //profile
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::post('/profile/{id}/updatePassword', [ProfileController::class, 'updatePassword'])->name('update_password');


});

//logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
