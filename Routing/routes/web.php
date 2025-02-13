<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Route 1: Simple message
Route::get('/', function () {
    return 'Hello, Laravel!';
});

// Route 2: Calls the GreetController method
Route::get('/greet', [GreetController::class, 'show']);