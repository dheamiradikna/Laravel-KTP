<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KtpController;
use App\Http\Controllers\Api\AuthController;



Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// KTP API Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('ktps', KtpController::class);
});
