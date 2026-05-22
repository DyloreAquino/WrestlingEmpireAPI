<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Championship;
use App\Http\Requests\StoreChampionshipRequest;
use App\Http\Requests\UpdateChampionshipRequest;
use App\Http\Resources\V1\ChampionshipResource;

class ChampionshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ChampionshipResource::collection(Championship::all());
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
    public function store(StoreChampionshipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Championship $championship)
    {
        return new ChampionshipResource($championship);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Championship $championship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChampionshipRequest $request, Championship $championship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Championship $championship)
    {
        //
    }
}
