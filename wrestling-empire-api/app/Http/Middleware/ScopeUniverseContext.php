<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ScopeUniverseContext
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        
        if ($user) {
            // 1. Check if the frontend explicitly sent a header override
            $universeId = $request->header('X-Universe-ID');

            // 2. Fallback: Use the user's saved database value if header is blank
            if (!$universeId) {
                $universeId = $user->current_universe_id;
            }

            // 3. If we found a universe ID through either method, attach it safely to the request object
            if ($universeId) {
                // Verify ownership to prevent unauthorized data tampering
                $universe = $user->universes()->find($universeId);
                
                if (!$universe) {
                    return response()->json(['message' => 'Unauthorized or invalid universe context.'], 403);
                }

                // Inject the verified universe model right into the request wrapper
                $request->attributes->set('active_universe', $universe);
            }
        }

        return $next($request);
    }
}