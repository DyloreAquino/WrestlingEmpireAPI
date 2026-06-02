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
    public function show(Request $request, Territory $territory)
    {
        return new TerritoryResource(
            $territory->loadMissing('wrestlers')
        );
    }
}
