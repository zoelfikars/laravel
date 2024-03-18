<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// test

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/generate-pdf', [MahasiswaController::class, 'generatePDF']);

