<?php
use App\Http\Controllers\Api\CountyController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ZipcodeController;
use App\Http\Controllers\Api\AuthController;

// Authentication routes
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'user']);

    Route::apiResource('counties', CountyController::class)->except(['index', 'show']);
    Route::apiResource('cities', CityController::class)->except(['index', 'show']);
    Route::apiResource('zipcodes', ZipcodeController::class)->except(['index', 'show']);
});

Route::apiResource('counties', CountyController::class)->only(['index', 'show']);
Route::apiResource('cities', CityController::class)->only(['index', 'show']);
Route::apiResource('zipcodes', ZipcodeController::class)->only(['index', 'show']);
