<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Territory;
use App\Http\Resources\V1\TerritoryResource;

class TerritoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $territory = Territory::with('wrestlers')->get();
        return TerritoryResource::collection($territory);
    }

    /**
     * Display the specified resource.
     */
    public function show(Territory $territory)
    {
        return new TerritoryResource(
            $territory->loadMissing('wrestlers')
        );
    }
}
