<?php

use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ProvinciaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::resource('provincias', ProvinciaController::class);
#Route::resource('ciudades', CiudadController::class);

Route::get('ciudades', [CiudadController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
