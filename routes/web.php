<?php

use App\Http\Controllers\FormResponseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageAccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WelcomeController::class, 'index']);

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy_policy');

Route::get('/promo-contact-form', function () {
    return view('promo-contact-form');
});

Route::post('/form_response', [FormResponseController::class, 'storeFormResponse'])->name('formResponse.store');
Auth::routes();

Route::middleware(['auth'])->group(function () {
    //Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/home/createAd', [HomeController::class, 'create'])->name('createAd');
    Route::get('/home/{id}/delete', [HomeController::class, 'delete'])->name('deleteAd');
    Route::get('/home/{id}/view', [HomeController::class, 'view'])->name('viewAd');
    Route::post('/home/{id}/update', [HomeController::class, 'update'])->name('updateAd');

    //Manage Account
    Route::get('/manage_account', [ManageAccountController::class, 'index'])->name('manageAccount');
    Route::get('/manage_account/{id}/view', [ManageAccountController::class, 'view'])->name('viewAccount');
    Route::post('/manage_account', [ManageAccountController::class, 'add'])->name('add_user');
    Route::post('/manage_account/{id}/update', [ManageAccountController::class, 'update'])->name('account_update');
    Route::get('/manage_account/{id}/delete', [ManageAccountController::class, 'delete'])->name('deleteAccount');



    //Form Response
    Route::get('/form_response', [FormResponseController::class, 'index'])->name('formResponse');
    Route::get('/form_response/{id}/view', [FormResponseController::class, 'view'])->name('viewResponse');

    //profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/{id}/userName', [ProfileController::class, 'updateUsername'])->name('update_username');
    Route::post('/profile/{id}/updatePassword', [ProfileController::class, 'updatePassword'])->name('update_password');
    Route::post('/profile/profile_image', [ProfileController::class, 'profile_image'])->name('upload_img');
});

//logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
