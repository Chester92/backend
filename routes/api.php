<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('marcas','App\Http\Controllers\MarcaController');
Route::resource('accesorio','App\Http\Controllers\AccesorioController');
Route::resource('vehiculos','App\Http\Controllers\VehiculoController');
