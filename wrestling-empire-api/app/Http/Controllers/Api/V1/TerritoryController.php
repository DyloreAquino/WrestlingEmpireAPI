<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Territory;
use App\Http\Resources\V1\TerritoryResource;
use Illuminate\Http\Request;

class TerritoryController extends Controller
{
    /**
     * Display all territories.
     * 
     * @group Territories
     */
    public function index()
    {
        return TerritoryResource::collection(Territory::all());
    }

    /**
     * Display one territory.
     * 
     * Also displays the wrestlers from that territory.
     * 
     * @group Territories
     */
    public function show(Request $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $territory = Territory::findOrFail($id);

        // Load only wrestlers assigned to this physical territory inside THIS specific universe
        $territory->universe_wrestlers = $territory->wrestlersInUniverse($universe->id)->get();

        return new TerritoryResource($territory);
    }
}
