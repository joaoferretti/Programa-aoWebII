<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvaliarSonoController;
use App\Http\Controllers\GastoViagemController;
use App\Http\Controllers\ImcController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('/imc', ImcController::class);
Route::resource('/avaliarSono', AvaliarSonoController::class);
Route::resource('/gastoViagem', GastoViagemController::class);

Route::post('/imc/calcular', [ImcController::class, 'calcular'])->name('imc.calcular');
Route::post('/gastoViagem/calcular', [GastoViagemController::class, 'calcular'])->name('gastoViagem.calcular');
Route::post('/avaliarSono/calcular', [AvaliarSonoController::class, 'calcular'])->name('avaliarSono.calcular');
