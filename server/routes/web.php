<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreBoardController;

Route::controller(ScoreBoardController::class)->group(function () {
    Route::get('scoreboard', 'index');
    Route::post('submit-score', 'store');
});
