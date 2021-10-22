<?php

use App\Http\Controllers\Payment\Authentication\LoginController;
use App\Http\Controllers\Payment\Authentication\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/registration',[RegistrationController::class,'index'])->name('Registration');
Route::post('/on-register',[RegistrationController::class,'register'])->name('On-Register');

Route::get('/login',[LoginController::class,'index'])->name('Login');
Route::post('/on-login',[LoginController::class,'login'])->name('On-Login');
