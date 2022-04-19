<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\muhasibu\muhasibuController;
use App\Http\Controllers\Storekeeper\PathrouterController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard',[PageController::class, 'dashboard']);
Route::get('/',[LoginController::class, 'login'])->name('login');
Route::get('/register',[RegisterController::class, 'register'])->name('register');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::post('custom-registration', [RegisterController::class, 'customRegistration'])->name('register.custom');  
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');


// store keeper..
Route::get('/Pathroute',[PathrouterController::class, 'pathroute']);
Route::get('/sto-drivers',[PathrouterController::class, 'storedrivers']);



//manager route
Route::get('/managerboard',[PageController::class, 'manager']);
Route::get('/drivers',[PageController::class, 'drivers']);

//muhasibu route

Route::get('/muhasibudash', [muhasibuController::class,'muhasibu']);
