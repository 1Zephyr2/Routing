<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Route 1: Returns a simple message
Route::get('/', function () {
    return 'Hello, Laravel!';
});

// Route 2: Calls a method in GreetController
Route::get('/greet', [GreetController::class, 'show']);

?>