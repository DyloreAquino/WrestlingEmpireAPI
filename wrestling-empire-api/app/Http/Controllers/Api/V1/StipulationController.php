<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Stipulation;
use App\Http\Resources\V1\StipulationResource;

class StipulationController extends Controller
{
    /**
     * Display all stipulations.
     * 
     * @group Stipulations
     */
    public function index()
    {
        return StipulationResource::collection(Stipulation::all());
    }

    /**
     * Display one stipulation.
     * 
     * @group Stipulations
     */
    public function show(Stipulation $stipulation)
    {
        return new StipulationResource($stipulation);
    }
}
