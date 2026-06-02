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
     * Display all championships.
     * 
     * @group Championships
     * 
     * @queryParam includeTitleReigns bool Include all title reigns associated to this championship, along with the wrestler/s of that reign.
     * @queryParam id integer Filter by championship ID. Operators: [eq]. Example: id[eq]=1
     * @queryParam createdAt datetime Filter by creation date. Operators: [eq], [gt], [lt]. Example: createdAt[gt]=2026-01-01
     * @queryParam updatedAt datetime Filter by update date. Operators: [eq], [gt], [lt]. Example: updatedAt[gt]=2026-01-01
     * @queryParam name string Filter by championship name. Operators: [eq]. Example: name[eq]=World Heavyweight Championship
     * @queryParam division string Filter by division (WORLD, MID, TAG, WOMENS). Operators: [eq], [ne]. Example: division[eq]=WORLD
     * @queryParam promotionId integer Filter by promotion ID. Operators: [eq]. Example: promotionId[eq]=3
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
     * Create a new championship.
     * 
     * @group Championships
     */
    public function store(StoreChampionshipRequest $request)
    {
        return new ChampionshipResource(Championship::create($request->all()));
    }

    /**
     * Display one championship.
     * 
     * @group Championships
     */
    public function show(Championship $championship)
    {
        return new ChampionshipResource(
            $championship->loadMissing('titleReigns.wrestlers')
        );
    }

    /**
     * Update a championship's information.
     * 
     * @group Championships
     */
    public function update(UpdateChampionshipRequest $request, Championship $championship)
    {
        $championship->update($request->all());
    }

    /**
     * Delete a championship.
     * 
     * @group Championships
     */
    public function destroy(Championship $championship)
    {
        //
    }
}
