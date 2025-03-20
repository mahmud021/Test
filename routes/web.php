<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

Route::get('/', [ChartController::class, 'index']);
Route::get('/covid-data', [ChartController::class, 'data']);
