<?php

use App\Http\Controllers\Api\Admin\CategoriaController;
use App\Http\Controllers\Api\Admin\EmpresaController;
use App\Http\Controllers\Api\Admin\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Client\EmpresaController as EmpresaClient;
use App\Http\Controllers\Api\FrontController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->get(function () {
    // ruta publica
    Route::get('/public/{slug}', [FrontController::class,'categoria']) ;
    // Login y register
    Route::get('/auth/register', [AuthController::class,'register']) ;
    Route::get('/auth/login', [AuthController::class,'login']) ;


    // ruta privada
    Route::group(['middleware' => 'auth:sanctum'], function () {
        // Login
        Route::post('/auth/logout', [AuthController::class,'logout']) ;
        // Rol clente
        Route::apiResource('/client/empresa', EmpresaClient::class) ;
        // Rol admin
        Route::apiResource('/admin/empresa', EmpresaController::class) ;
        Route::apiResource('/admin/user', UserController::class) ;
        Route::apiResource('/admin/categoria', CategoriaController::class) ;
    });

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
