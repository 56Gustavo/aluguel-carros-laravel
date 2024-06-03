<?php


use App\Http\Controllers\CarController;


Route::get('/veiculos', [CarController::class, 'index']);




