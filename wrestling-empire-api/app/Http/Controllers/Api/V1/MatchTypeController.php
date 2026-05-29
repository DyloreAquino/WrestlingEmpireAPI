<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MatchType;
use App\Http\Requests\StoreMatchTypeRequest;
use App\Http\Requests\UpdateMatchTypeRequest;
use App\Http\Resources\V1\MatchTypeResource;

// TODO: Create MatchTypesQuery
class MatchTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MatchTypeResource::collection(MatchType::all());
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
    public function store(StoreMatchTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MatchType $matchType)
    {
        return new MatchTypeResource($matchType);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MatchType $matchType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMatchTypeRequest $request, MatchType $matchType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MatchType $matchType)
    {
        //
    }
}
