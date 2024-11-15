<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// All patients
Route::view('dashboard', 'patients.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Add a patient route
Route::view('patients/new', 'patients.new')
  ->middleware(['auth'])
  ->name('patients.new');

// Patient profile
Route::view('patients/{patient}', 'patients.patient')
  ->middleware(['auth'])
  ->name('patient');

// New Measurement
Route::view('patients/{patient}/measurement', 'patients.measurement')
  ->middleware(['auth'])
  ->name('measurement');

// Measurement
Route::get('patients/{patient}/measurements', function (App\Models\Patient $patient) {
    return view('patients.measurements', [
        'patient' => $patient,
        'measurements' => $patient->measurements, 
    ]);
})->middleware(['auth'])->name('measurements');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
