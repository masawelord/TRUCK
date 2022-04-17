<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Storekeeper\PathrouterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard',[PageController::class, 'dashboard']);
Route::get('/',[LoginController::class, 'login'])->name('login');
Route::get('/register',[RegisterController::class, 'register'])->name('register');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::post('custom-registration', [RegisterController::class, 'customRegistration'])->name('register.custom');  
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');



// store keeper..
Route::get('/Pathroute',[PathrouterController::class, 'pathroute']);