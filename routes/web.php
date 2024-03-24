<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VatCalculatorController;
use App\Http\Controllers\HomeController;

//Route::middleware(['auth'])->group(function () {
//    Route::get('/vat', [VatCalculatorController::class, 'index'])->name('home');
//    Route::post('/calculate', [VatCalculatorController::class, 'calculate'])->name('calculate');
//});
//
//Route::get('/', [HomeController::class,'home'])->name('home');
//
//Auth::routes();

    Route::get('/', [VatCalculatorController::class, 'index'])->name('home');
    Route::post('/calculate', [VatCalculatorController::class, 'calculate'])->name('calculate');
