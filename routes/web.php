<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\GameController;

Route::get('/', function () {
    return "Bienvenidos al curso de Laravel 9 en El rincon de Isma";
});
Route::get('/games', [GameController::class,'index']);
Route::get('/games/create', [GameController::class,'create']);
Route::get('/games/{name_game}/categoria?', [GameController::class,'help']);
