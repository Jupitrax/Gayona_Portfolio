<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['portfolio'])->group(function () {
    Route::get('/', [ProjectController::class, 'index']);
    Route::get('/projects', [ProjectController::class, 'index']);
});
