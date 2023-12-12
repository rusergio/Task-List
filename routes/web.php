<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TaskController::class, 'index']);
Route::post('/', [TaskController::class, 'store']);

Route::delete('/{task}', [TaskController::class, 'destroy']);
