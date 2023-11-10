<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TaskController::class, 'index']);
Route::post('/', [TaskController::class, 'store']);

Route::get('/tasks', function(){
    return view('tasks');
});

Route::get('/app', function(){
    return view('app');
});

Route::get('/register', function(){
    return view('register');
});



