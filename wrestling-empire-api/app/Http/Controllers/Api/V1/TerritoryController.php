<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Territory;
use App\Http\Requests\StoreTerritoryRequest;
use App\Http\Requests\UpdateTerritoryRequest;
use App\Http\Resources\V1\TerritoryResource;

class TerritoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TerritoryResource::collection(Territory::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTerritoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Territory $territory)
    {
        return new TerritoryResource($territory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Territory $territory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTerritoryRequest $request, Territory $territory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Territory $territory)
    {
        //
    }
}
