<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\personaController;


Route::get('/personas', [personaController::class, 'index']);
Route::get('/personas/{ID_PERSONA}', [personaController::class, 'show']);
Route::post('/personas', [personaController::class, 'store']);

Route::put('/personas/{id}', function () {
    return 'actualizando persona';
});
Route::delete('/personas/{id}', function () {
    return 'eliminando persona';
});
