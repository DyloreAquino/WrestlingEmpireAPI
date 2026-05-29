<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ChampionshipsFilter;
use App\Http\Controllers\Controller;
use App\Models\Championship;
use App\Http\Requests\StoreChampionshipRequest;
use App\Http\Requests\UpdateChampionshipRequest;
use App\Http\Resources\V1\ChampionshipResource;
use Illuminate\Http\Request;

class ChampionshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ChampionshipsFilter();
        $queryItems =  $filter->transform($request);

        if (count($queryItems) == 0) {
            return ChampionshipResource::collection(Championship::all());
        } else {
            return ChampionshipResource::collection(Championship::where($queryItems)->get());
        }
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
