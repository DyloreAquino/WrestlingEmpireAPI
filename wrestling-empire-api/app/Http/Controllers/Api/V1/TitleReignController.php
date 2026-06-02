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
        $filter = new TitleReignsFilter();
        $filterItems =  $filter->transform($request);

        $titleReign = TitleReign::where($filterItems);

        // $includeWrestlers = $request->query('includeWrestlers');
        $includeWrestlers = true;
        
        if ($includeWrestlers) {
            $titleReign = $titleReign->with('wrestlers');
        }

        return TitleReignResource::collection($titleReign->get());
    }

    /**
     * Create a new title reign.
     * 
     * @group Title Reigns
     */
    public function store(StoreTitleReignRequest $request)
    {
        return new TitleReignResource(TitleReign::create($request->all()));
    }

    /**
     * Display one title reign.
     * 
     * Also shows the wrestler associated with this title reign.
     * 
     * @group Title Reigns
     */
    public function show(TitleReign $titleReign)
    {
        return new TitleReignResource(
            $titleReign->loadMissing('wrestlers')
        );
    }

    /**
     * Update a title reign's information.
     * 
     * @group Title Reigns
     */
    public function update(UpdateTitleReignRequest $request, TitleReign $titleReign)
    {
        $titleReign->update($request->all());
        return new TitleReignResource($titleReign);
    }

    /**
     * Delete a title reign.
     * 
     * @group Title Reigns
     */
    public function destroy(TitleReign $titleReign)
    {
        //
    }

    /**
     * Assign wrestlers to a title reign.
     * 
     * Replaces the list of wrestlers associated with this title reign.
     * 
     * @group Title Reigns
     */
    public function assignWrestlers(AssignWrestlersRequest $request, TitleReign $titleReign)
    {
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
    public function endReign(EndDateRequest $request, TitleReign $titleReign)
    {
        $titleReign->year_end = $request->yearEnd;
        $titleReign->month_end = $request->monthEnd;
        $titleReign->week_end = $request->weekEnd;
        $titleReign->save();
        return response()->json(['message' => 'Title reign ended.']);
    }
}
