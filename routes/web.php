<?php

use App\Http\Controllers\Api\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/register',[RegisterController::class,'register']);
// Route::post('/login',[RegisterController::class,'login']);