<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreBoardController;
use App\Http\Controllers\SnakeScoreBoardController;
use App\Http\Controllers\SpaceScoreboardController;

Route::controller(ScoreBoardController::class)->group(function () {
    Route::get('scoreboard', 'index');
    Route::post('submit-score', 'store');
});

Route::controller(SnakeScoreBoardController::class)->group(function () {
    Route::get('snake/scoreboard', 'index');
    Route::post('snake/submit-score', 'store');
});

Route::controller(SpaceScoreboardController::class)->group(function () {
    Route::get('space/scoreboard', 'index');
    Route::post('space/submit-score', 'store');
});
