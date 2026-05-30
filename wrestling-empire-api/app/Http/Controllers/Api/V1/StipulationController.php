<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Stipulation;
use App\Http\Resources\V1\StipulationResource;

class StipulationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StipulationResource::collection(Stipulation::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Stipulation $stipulation)
    {
        return new StipulationResource($stipulation);
    }
}
