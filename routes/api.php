<?php

use App\Http\Controllers\Diary\StudyDiaryController;
use App\Http\Controllers\Qualification\QualificationController;
use App\Http\Controllers\Qualification\QualificationHistoryController;
use App\Http\Controllers\Quiz\QuizController;
use App\Http\Controllers\Quiz\QuizHistoryController;
use App\Http\Controllers\Thread\ThreadController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->get('/users', function (Request $request) {
    return User::all();
});

Route::middleware(['auth:sanctum'])->apiResource('study-diaries', StudyDiaryController::class);

Route::middleware(['auth:sanctum'])->apiResource('quizzes', QuizController::class);

Route::middleware(['auth:sanctum'])->apiResource('threads', ThreadController::class);

Route::middleware(['auth:sanctum'])->apiResource('qualifications', QualificationController::class);

Route::middleware(['auth:sanctum'])->apiResource('qualification-history', QualificationHistoryController::class);

Route::middleware(['auth:sanctum'])->apiResource('quiz-history', QuizHistoryController::class);
