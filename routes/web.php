<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Payment\PaymentHistoryController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Subject\SubjectChoiceController;
use App\Http\Controllers\Subject\SubjectController;
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

Route::get('/',[DashboardController::class,'index'])->name('Dashboard');

Route::get('/subjectChoices/{id}',[SubjectChoiceController::class,'subjectChoicesView'])->name('AddSubjectView');
Route::post('/on-subjectChoices/{id}',[SubjectChoiceController::class,'addSubjectChoices'])->name('AddSubject');
Route::get('/action/{id}/{action}',[SubjectChoiceController::class,'actions'])->name('Action');


Route::get('/payment/{subject}/{student}',[PaymentHistoryController::class,'makePaymentView'])->name('Payment');

Route::resource('student',StudentController::class);

Route::resource('subject',SubjectController::class);

require __DIR__.'/authentication.php';
