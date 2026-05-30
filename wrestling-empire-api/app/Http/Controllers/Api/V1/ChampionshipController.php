<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ChampionshipsFilter;
use App\Http\Controllers\Controller;
use App\Models\Championship;
use App\Http\Requests\V1\StoreChampionshipRequest;
use App\Http\Requests\V1\UpdateChampionshipRequest;
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
        $filterItems =  $filter->transform($request);

        $championship = Championship::where($filterItems);

        $includeTitleReigns = $request->query('includeTitleReigns');

        if ($includeTitleReigns) {
            $championship = $championship->with('titleReigns.wrestlers');
        }

        return ChampionshipResource::collection($championship->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChampionshipRequest $request)
    {
        return new ChampionshipResource(Championship::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Championship $championship)
    {
        return new ChampionshipResource(
            $championship->loadMissing('titleReigns.wrestlers')
        );
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
