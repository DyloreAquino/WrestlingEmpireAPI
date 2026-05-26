<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Wrestler;
use App\Http\Requests\StoreWrestlerRequest;
use App\Http\Requests\UpdateWrestlerRequest;
use App\Http\Resources\V1\WrestlerResource;

class WrestlerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return WrestlerResource::collection(Wrestler::all());
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
    public function store(StoreWrestlerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wrestler $wrestler)
    {
        return new WrestlerResource($wrestler);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wrestler $wrestler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWrestlerRequest $request, Wrestler $wrestler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wrestler $wrestler)
    {
        //
    }
}
