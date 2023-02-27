<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'create']);
Route::post('/', [TodoController::class, 'create']);
Route::post('/create', [TodoController::class, 'create']);
