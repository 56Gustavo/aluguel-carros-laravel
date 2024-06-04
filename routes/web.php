<?php


use App\Http\Controllers\CarController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('veiculos.index');
    Route::get('/veiculos', [CarController::class, 'index'])->name('veiculos.index');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Auth::routes();

Route::get('/home', [CarController::class, 'index'])->name('home');
