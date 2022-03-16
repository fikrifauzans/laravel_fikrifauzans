<?php

use App\Http\Controllers\HospitalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [HospitalController::class, 'show'])->name('home');
    Route::get('/show', [HospitalController::class, 'showTable']);
    Route::post('/post', [HospitalController::class, 'post']);
    Route::get('/update/{hospital:id}', [HospitalController::class, 'update']);
    Route::post('/update', [HospitalController::class, 'put']);
    Route::post('/delete', [HospitalController::class, 'destroy']);
    Route::get('/patient', [PatientController::class, 'show']);
    Route::get('/patient/show', [PatientController::class, 'showTable']);
    Route::post('/patient/delete', [PatientController::class, 'destroy']);
    Route::get('/patient/update/{patient:id}', [PatientController::class, 'put']);
    Route::post('/patient/update', [PatientController::class, 'update']);
    Route::get('/patient/create', [PatientController::class, 'create']);
    Route::post('/patient/post', [PatientController::class, 'post']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/auth', [LoginController::class, 'authenticate']);
});
