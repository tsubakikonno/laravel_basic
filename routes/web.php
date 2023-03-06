<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;



Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::post('create', [TodoController::class, 'create']);
Route::post('delete', [TodoController::class, 'delete']);
Route::get('delete', [TodoController::class, 'delete']);




