<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Show;
use App\Http\Requests\V1\StoreShowRequest;
use App\Http\Requests\V1\UpdateShowRequest;
use App\Http\Resources\V1\ShowResource;
use Illuminate\Http\Request;
use App\Filters\V1\ShowsFilter;

class ShowController extends Controller
{
    /**
     * Display all shows.
     * 
     * @group Shows
     * 
     *
     * @queryParam id integer Filter by show ID. Operators: [eq]. Example: id[eq]=1
     * @queryParam createdAt datetime Filter by creation date. Operators: [eq], [gt], [lt]. Example: createdAt[gt]=2026-01-01
     * @queryParam updatedAt datetime Filter by update date. Operators: [eq], [gt], [lt]. Example: updatedAt[gt]=2026-01-01
     * @queryParam name string Filter by show name. Operators: [eq]. Example: name[eq]=Monday Night Showdown
     * @queryParam year integer Filter by year. Operators: [eq], [gt], [lt]. Example: year[gt]=2020
     * @queryParam month integer Filter by month. Operators: [eq], [gt], [lt]. Example: month[eq]=5
     * @queryParam week integer Filter by week. Operators: [eq], [gt], [lt]. Example: week[eq]=2
     * @queryParam type string Filter by show type (TV, PPV, SPECIAL). Operators: [eq], [ne]. Example: type[eq]=PPV
     * @queryParam territoryId integer Filter by territory ID. Operators: [eq]. Example: territoryId[eq]=3
     */
    public function index(Request $request)
    {
        $filter = new ShowsFilter();
        $filterItems =  $filter->transform($request);

        $show = Show::where($filterItems);

        return ShowResource::collection($show->get());
    }

    /**
     * Create a new show.
     * 
     * @group Shows
     */
    public function store(StoreShowRequest $request)
    {
        return new ShowResource(Show::create($request->all()));
    }

    /**
     * Display one show.
     * 
     * Also shows the show's events, each event's wrestlers and its stipulations.
     * 
     * @group Shows
     */
    public function show(Show $show)
    {
        return new ShowResource(
            $show->loadMissing('events.wrestlers', 'events.stipulations')
        );
    }

    /**
     * Update a show's information.
     * 
     * @group Shows
     */
    public function update(UpdateShowRequest $request, Show $show)
    {
        $show->update($request->all());
        return new ShowResource($show);
    }

    /**
     * Delete a show.
     * 
     * @group Shows
     */
    public function destroy(Show $show)
    {
        //
    }
}
