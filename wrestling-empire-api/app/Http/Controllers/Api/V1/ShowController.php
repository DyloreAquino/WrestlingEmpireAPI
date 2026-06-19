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
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $filter = new ShowsFilter();
        $queryItems = $filter->transform($request);

        // Scope queries exclusively to this isolated universe world
        $showQuery = Show::where('universe_id', $universe->id)
            ->where($queryItems['where']);

        foreach ($queryItems['whereIn'] as [$column, $values]) {
            $showQuery = $showQuery->whereIn($column, $values);
        }

        return ShowResource::collection($showQuery->get());
    }

    /**
     * Create a new show.
     * 
     * @group Shows
     */
    public function store(StoreShowRequest $request)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Attach universe context before saving record instance
        $data = array_merge($request->all(), ['universe_id' => $universe->id]);
        $show = Show::create($data);

        return new ShowResource($show);
    }

    /**
     * Display one show.
     * 
     * Also shows the show's events, each event's wrestlers and its stipulations.
     * 
     * @group Shows
     */
    public function show(Request $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Guarantees cross-tenant resource protection
        $show = Show::where('universe_id', $universe->id)->findOrFail($id);

        return new ShowResource(
            $show->loadMissing('events.wrestlers', 'events.stipulations')
        );
    }

    /**
     * Update a show's information.
     * 
     * @group Shows
     */
    public function update(UpdateShowRequest $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $show = Show::where('universe_id', $universe->id)->findOrFail($id);
        $show->update($request->all());

        return new ShowResource($show);
    }

    /**
     * Delete a show.
     * 
     * @group Shows
     */
    public function destroy(Request $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $show = Show::where('universe_id', $universe->id)->findOrFail($id);
        $show->delete();

        return response()->json([
            'message' => 'Show deleted successfully.'
        ], 200);
    }
}
