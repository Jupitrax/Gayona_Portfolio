<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['portfolio'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/experience', [ExperienceController::class, 'index']);
    Route::get('/projects', [ProjectController::class, 'index']);
    Route::get('/skills', [SkillController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index']);
});
