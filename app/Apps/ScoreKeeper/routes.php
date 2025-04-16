<?php

use App\Apps\ScoreKeeper\ScoreKeeperController;
use Illuminate\Support\Facades\Route;

Route::prefix('score_keeper')->group(function () {
    Route::get('/', [ScoreKeeperController::class, 'index'])
        ->name('score_keeper.index');;
});
