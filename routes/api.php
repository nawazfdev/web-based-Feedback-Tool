<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Auth routes (registration, login, logout)
Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);
});

// Feedback routes (CRUD operations and related comments)
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('feedback', FeedbackController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
    // Comment-related routes
    Route::post('feedback/{feedbackId}/comments', [CommentController::class, 'store']);
    Route::get('feedback/{feedbackId}/comments', [CommentController::class, 'index']);
});
 
