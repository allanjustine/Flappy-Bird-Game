<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreBoardController;
use App\Http\Controllers\SnakeScoreBoardController;

Route::controller(ScoreBoardController::class)->group(function () {
    Route::get('scoreboard', 'index');
    Route::post('submit-score', 'store');
});

Route::controller(SnakeScoreBoardController::class)->group(function () {
    Route::get('snake/scoreboard', 'index');
    Route::post('snake/submit-score', 'store');
});
