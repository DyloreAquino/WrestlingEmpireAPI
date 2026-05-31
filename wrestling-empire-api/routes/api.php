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
    // Routes with CRUD features
    Route::apiResource('wrestlers', WrestlerController::class);
    Route::apiResource('championships', ChampionshipController::class);
    Route::apiResource('events', EventController::class);
    Route::apiResource('shows', ShowController::class);
    Route::apiResource('teams', TeamController::class);
    Route::apiResource('title_reigns', TitleReignController::class);

    // Routes that are read-only
    Route::apiResource('match_types', MatchTypeController::class)->only(['index', 'show']);
    Route::apiResource('promotions', PromotionController::class)->only(['index', 'show']);
    Route::apiResource('stipulations', StipulationController::class)->only(['index', 'show']);
    Route::apiResource('territories', TerritoryController::class)->only(['index', 'show']);
    
    // Special routes for special functionality
    
});