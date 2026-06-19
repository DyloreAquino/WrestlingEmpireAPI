<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\TitleReignsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\AssignWrestlersRequest;
use App\Http\Requests\V1\EndDateRequest;
use App\Models\TitleReign;
use App\Http\Requests\V1\StoreTitleReignRequest;
use App\Http\Requests\V1\UpdateTitleReignRequest;
use App\Http\Resources\V1\TitleReignResource;
use Illuminate\Http\Request;

class TitleReignController extends Controller
{
    /**
     * Display all title reigns.
     * 
     * Also shows the wrestlers associated with each title reign.
     * 
     * @group Title Reigns
     * 
     * @queryParam id integer Filter by title reign ID. Operators: [eq]. Example: id[eq]=1
     * @queryParam championshipId integer Filter by championship ID. Operators: [eq]. Example: championshipId[eq]=2
     * @queryParam yearStart integer Filter by start year. Operators: [eq], [gt], [lt]. Example: yearStart[gt]=2020
     * @queryParam monthStart integer Filter by start month. Operators: [eq], [gt], [lt]. Example: monthStart[eq]=8
     * @queryParam weekStart integer Filter by start week. Operators: [eq], [gt], [lt]. Example: weekStart[eq]=3
     * @queryParam yearEnd integer Filter by end year. Operators: [eq], [gt], [lt]. Example: yearEnd[lt]=2026
     * @queryParam monthEnd integer Filter by end month. Operators: [eq], [gt], [lt]. Example: monthEnd[eq]=3
     * @queryParam weekEnd integer Filter by end week. Operators: [eq], [gt], [lt]. Example: weekEnd[eq]=2
     * @queryParam createdAt datetime Filter by creation date. Operators: [eq], [gt], [lt]. Example: createdAt[gt]=2026-01-01
     * @queryParam updatedAt datetime Filter by update date. Operators: [eq], [gt], [lt]. Example: updatedAt[gt]=2026-01-01
     */
    public function index(Request $request)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $filter = new TitleReignsFilter();
        $queryItems = $filter->transform($request);

        // Scope records through a relationship sub-query looking up the active universe
        $titleReignQuery = TitleReign::whereHas('championship', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->where($queryItems['where']);

        foreach ($queryItems['whereIn'] as [$column, $values]) {
            $titleReignQuery = $titleReignQuery->whereIn($column, $values);
        }

        $titleReignQuery = $titleReignQuery->with('wrestlers');

        return TitleReignResource::collection($titleReignQuery->get());
    }

    /**
     * Create a new title reign.
     * 
     * @group Title Reigns
     */
    public function store(StoreTitleReignRequest $request)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Security check: Verify that target championship belongs to this specific universe
        $universe->championships()->findOrFail($request->championship_id);

        return new TitleReignResource(TitleReign::create($request->all()));
    }

    /**
     * Display one title reign.
     * 
     * Also shows the wrestler associated with this title reign.
     * 
     * @group Title Reigns
     */
    public function show(Request $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Enforce data boundary ownership checks
        $titleReign = TitleReign::whereHas('championship', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        return new TitleReignResource(
            $titleReign->loadMissing('wrestlers')
        );
    }

    /**
     * Update a title reign's information.
     * 
     * @group Title Reigns
     */
    public function update(UpdateTitleReignRequest $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $titleReign = TitleReign::whereHas('championship', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        // If shifting championships, confirm target exists in our sandboxed universe
        if ($request->championship_id) {
            $universe->championships()->findOrFail($request->championship_id);
        }

        $titleReign->update($request->all());
        return new TitleReignResource($titleReign);
    }

    /**
     * Delete a title reign.
     * 
     * @group Title Reigns
     */
    public function destroy(Request $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $titleReign = TitleReign::whereHas('championship', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        $titleReign->delete();

        return response()->json([
            'message' => 'Title Reign deleted successfully.'
        ], 200);
    }

    /**
     * Assign wrestlers to a title reign.
     * 
     * Replaces the list of wrestlers associated with this title reign.
     * 
     * @group Title Reigns
     */
    public function assignWrestlers(AssignWrestlersRequest $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $titleReign = TitleReign::whereHas('championship', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        // Security validation check: Ensure wrestlers being assigned belong strictly to this universe
        $validCount = $universe->wrestlers()->whereIn('id', $request->wrestlerIds)->count();
        if ($validCount !== count($request->wrestlerIds)) {
            return response()->json(['message' => 'Invalid wrestler assignment context for this universe.'], 422);
        }

        $titleReign->wrestlers()->sync($request->wrestlerIds);
        return response()->json(['message' => 'Wrestlers assigned to title reign.']);
    }

    /**
     * End a title reign.
     * 
     * Updates the end dates of this title reign.
     * 
     * @group Title Reigns
     */
    public function endReign(EndDateRequest $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $titleReign = TitleReign::whereHas('championship', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        $titleReign->year_end = $request->yearEnd;
        $titleReign->month_end = $request->monthEnd;
        $titleReign->week_end = $request->weekEnd;
        $titleReign->save();

        return response()->json(['message' => 'Title reign ended.']);
    }
}
