<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/generate-exercises', [MainController::class, 'generateExercices'])->name('generateExercices');
Route::get('/print-exercices', [MainController::class, 'printExercices'])->name('printExercices');
Route::get('/export-exercices', [MainController::class, 'exportExercices'])->name('exportExercices');

