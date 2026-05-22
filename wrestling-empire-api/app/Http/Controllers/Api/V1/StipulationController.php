<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Stipulation;
use App\Http\Requests\StoreStipulationRequest;
use App\Http\Requests\UpdateStipulationRequest;

class StipulationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Stipulation::all();
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
    public function store(StoreStipulationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Stipulation $stipulation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stipulation $stipulation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStipulationRequest $request, Stipulation $stipulation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stipulation $stipulation)
    {
        //
    }
}
