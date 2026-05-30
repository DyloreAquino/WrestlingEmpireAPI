<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MatchType;
use App\Http\Resources\V1\MatchTypeResource;

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
     * Display the specified resource.
     */
    public function show(MatchType $matchType)
    {
        return new MatchTypeResource($matchType);
    }
}
