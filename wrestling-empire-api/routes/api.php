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
use Laravel\Prompts\Title;

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
    // Events
    Route::put('events/{event}/wrestlers', [EventController::class, 'assignWrestlers']);
    Route::patch('events/{event}/simulate', [EventController::class, 'simulate']);
    Route::put('events/{event}/stipulations', [EventController::class, 'assignStipulations']);
    // Title Reigns
    Route::put('title_reigns/{titleReign}/wrestlers', [TitleReignController::class, 'assignWrestlers']);
    Route::patch('title_reigns/{titleReign}/end', [TitleReignController::class, 'endReign']);
    // Teams
    Route::put('teams/{team}/wrestlers', [TeamController::class, 'assignWrestlers']);
    Route::post('teams/{team}/wrestlers', [TeamController::class, 'addWrestlers']);
    Route::patch('teams/{team}/end', [TeamController::class, 'endTeam']);
});