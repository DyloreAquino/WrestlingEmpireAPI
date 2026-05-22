<?php

use App\Http\Controllers\Api\V1\ChampionshipController;
use App\Http\Controllers\Api\V1\EventController;
use App\Http\Controllers\Api\V1\MatchTypeController;
use App\Http\Controllers\Api\V1\PromotionController;
use App\Http\Controllers\Api\V1\ShowController;
use App\Http\Controllers\Api\V1\StipulationController;
use App\Http\Controllers\Api\V1\TeamController;
use App\Http\Controllers\Api\V1\TerritoryController;
use App\Http\Controllers\Api\V1\TitleReignController;
use App\Http\Controllers\Api\V1\WrestlerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('wrestlers', WrestlerController::class);
    Route::apiResource('championships', ChampionshipController::class);
    Route::apiResource('events', EventController::class);
    Route::apiResource('match_types', MatchTypeController::class);
    Route::apiResource('promotions', PromotionController::class);
    Route::apiResource('shows', ShowController::class);
    Route::apiResource('stipulations', StipulationController::class);
    Route::apiResource('teams', TeamController::class);
    Route::apiResource('territories', TerritoryController::class);
    Route::apiResource('title_reigns', TitleReignController::class);
});