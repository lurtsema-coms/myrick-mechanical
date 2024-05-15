<?php

use App\Http\Controllers\ExportFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageAccountController;
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

Auth::routes();

//Home
Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');

//Manage Account
Route::get('/manage_account', [ManageAccountController::class, 'index'])->middleware(['auth'])->name('manageAccount');


//Export Form
Route::get('/export_form', [ExportFormController::class, 'index'])->middleware(['auth'])->name('exportForm');


//logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
