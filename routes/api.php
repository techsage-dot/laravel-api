<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public route
Route::get('/ping', function () {
    return response()->json(['message' => 'API is working']);
});

// Auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Protected route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
