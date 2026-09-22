<?php

use App\Http\Controllers\PidController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PidController::class, 'index'])
    ->name('pid.index');

Route::post('/extract', [PidController::class, 'extract'])
    ->name('pid.extract');