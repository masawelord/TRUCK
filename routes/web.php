<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\muhasibu\muhasibuController;
use App\Http\Controllers\Storekeeper\PathrouterController;
use Illuminate\Support\Facades\Route;

// homepage route
Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[PageController::class, 'dashboard']);
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/register',[RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'customRegistration']);  
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');


// store keeper..
Route::get('/Pathroute',[PathrouterController::class, 'pathroute']);
Route::get('/sto-drivers',[PathrouterController::class, 'storedrivers']);



//manager route
Route::get('/managerboard',[PageController::class, 'manager']);
Route::get('/drivers',[PageController::class, 'drivers']);

//muhasibu route

Route::get('/muhasibudash', [muhasibuController::class,'muhasibu']);
Route::get('/invoice', [muhasibuController::class,'invoice']);
Route::get('/create-invoice', [muhasibuController::class,'create_invoice']);


