<?php

use App\Http\Controllers\FormResponseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageAccountController;
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

Route::post('/form_response', [FormResponseController::class, 'storeFormResponse'])->name('formResponse.store');
Auth::routes();

Route::middleware(['auth'])->group(function () {
    //Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Manage Account
    Route::get('/manage_account', [ManageAccountController::class, 'index'])->name('manageAccount');


    //Form Response
    Route::get('/form_response', [FormResponseController::class, 'index'])->name('formResponse');
});

//logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
