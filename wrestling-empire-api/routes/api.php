<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\Api\V1\ChampionshipController;
use App\Http\Controllers\Api\V1\EventController;
use App\Http\Controllers\Api\V1\MatchTypeController;
use App\Http\Controllers\Api\V1\PromotionController;
use App\Http\Controllers\Api\V1\ShowController;
use App\Http\Controllers\Api\V1\StipulationController;
use App\Http\Controllers\Api\V1\TeamController;
use App\Http\Controllers\Api\V1\TerritoryController;
use App\Http\Controllers\Api\V1\TitleReignController;
use App\Http\Controllers\Api\V1\WrestlerController; // Ensure these paths match your actual folders
use App\Http\Middleware\ScopeUniverseContext;

Route::prefix('v1')->group(function () {
    // Public Auth
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    // Authenticated Routes
    Route::middleware(['auth:sanctum'])->group(function () {
        
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/user', fn (Request $request) => $request->user());
        Route::patch('/user/active-universe', [AuthController::class, 'updateActiveUniverse']);
        
        // Base Universe Management (Flat)
        Route::apiResource('universes', UniverseController::class);

        // Global Metadata
        Route::apiResource('match_types', MatchTypeController::class)->only(['index', 'show']);
        Route::apiResource('promotions', PromotionController::class)->only(['index', 'show']);
        Route::apiResource('stipulations', StipulationController::class)->only(['index', 'show']);
        Route::apiResource('territories', TerritoryController::class)->only(['index', 'show']);

        // Scoped Universe Logic (Header-based scoping)
        Route::middleware([ScopeUniverseContext::class])->group(function () {
            
            // THESE ARE NOW FLAT. 
            // e.g., GET /v1/wrestlers
            Route::apiResource('wrestlers', WrestlerController::class);
            Route::apiResource('championships', ChampionshipController::class);
            Route::apiResource('shows', ShowController::class);
            Route::apiResource('teams', TeamController::class);
            
            // Team operations
            Route::put('teams/{team}/wrestlers', [TeamController::class, 'assignWrestlers']);
            Route::post('teams/{team}/wrestlers', [TeamController::class, 'addWrestlers']);
            Route::patch('teams/{team}/end', [TeamController::class, 'endTeam']);

            // Downstream Data
            Route::apiResource('events', EventController::class)->except(['index', 'store']);
            Route::apiResource('title_reigns', TitleReignController::class);

            Route::put('events/{event}/wrestlers', [EventController::class, 'assignWrestlers']);
            Route::patch('events/{event}/simulate', [EventController::class, 'simulate']);
            Route::put('events/{event}/stipulations', [EventController::class, 'assignStipulations']);
            
            Route::put('title_reigns/{titleReign}/wrestlers', [TitleReignController::class, 'assignWrestlers']);
            Route::patch('title_reigns/{titleReign}/end', [TitleReignController::class, 'endReign']);
        });
    });
});