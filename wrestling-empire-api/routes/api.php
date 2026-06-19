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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UniverseController;
use App\Http\Middleware\ScopeUniverseContext;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// V1 API Group
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    
    // Global Read-Only Metadata (Available to anyone/any universe)
    Route::apiResource('match_types', MatchTypeController::class)->only(['index', 'show']);
    Route::apiResource('promotions', PromotionController::class)->only(['index', 'show']);
    Route::apiResource('stipulations', StipulationController::class)->only(['index', 'show']);
    Route::apiResource('territories', TerritoryController::class)->only(['index', 'show']);

    // ALL core actions MUST require Authentication
    Route::middleware(['auth:sanctum', ScopeUniverseContext::class])->group(function () {
        
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/user', fn (Request $request) => $request->user());

        // Base Universe Management
        Route::apiResource('universes', UniverseController::class);
        Route::patch('/user/active-universe', [AuthController::class, 'updateActiveUniverse']);

        // --- SCOPED UNIVERSE RESOURCES ---
        // URLs look like: /api/v1/universes/{universe}/wrestlers
        Route::prefix('universes/{universe}')->group(function () {
            
            Route::apiResource('wrestlers', WrestlerController::class);
            Route::apiResource('championships', ChampionshipController::class);
            Route::apiResource('shows', ShowController::class);
            Route::apiResource('teams', TeamController::class);
            
            // Sub-resource special routes
            Route::put('teams/{team}/wrestlers', [TeamController::class, 'assignWrestlers']);
            Route::post('teams/{team}/wrestlers', [TeamController::class, 'addWrestlers']);
            Route::patch('teams/{team}/end', [TeamController::class, 'endTeam']);
        });

        // --- DOWNSTREAM DATA (ID-driven execution) ---
        // These don't strictly need {universe} in the URL because their IDs are already unique global keys
        Route::apiResource('events', EventController::class)->except(['index', 'store']); // Nested underneath custom show endpoints if needed
        Route::apiResource('title_reigns', TitleReignController::class);

        // Event Actions
        Route::put('events/{event}/wrestlers', [EventController::class, 'assignWrestlers']);
        Route::patch('events/{event}/simulate', [EventController::class, 'simulate']);
        Route::put('events/{event}/stipulations', [EventController::class, 'assignStipulations']);
        
        // Title Reign Actions
        Route::put('title_reigns/{titleReign}/wrestlers', [TitleReignController::class, 'assignWrestlers']);
        Route::patch('title_reigns/{titleReign}/end', [TitleReignController::class, 'endReign']);
    });
});