<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

Route::get('/', [ChartController::class, 'index']);
Route::get('/chart-data', [ChartController::class, 'data']);
