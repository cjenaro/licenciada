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

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
