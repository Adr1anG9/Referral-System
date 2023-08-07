<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

// Setting /patients as the main page
Route::get('/', [PatientController::class, 'index'])->name('home');

// Resource controller route to PatientController
Route::resource('patients', PatientController::class);

// Routes for accept and reject feature
Route::put('patients/{patient}/accept', [PatientController::class, 'accept'])->name('patients.accept');
Route::put('patients/{patient}/reject', [PatientController::class, 'reject'])->name('patients.reject');


// Route to import existing patients
// Route::post('patients/import', [PatientController::class, 'import'])->name('patients.import');