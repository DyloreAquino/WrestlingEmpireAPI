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
     * Display a listing of the resource.
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
     * Store a newly created resource in storage.
     */
    public function store(StoreTitleReignRequest $request)
    {
        return new TitleReignResource(TitleReign::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(TitleReign $titleReign)
    {
        return new TitleReignResource(
            $titleReign->loadMissing('wrestlers')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTitleReignRequest $request, TitleReign $titleReign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TitleReign $titleReign)
    {
        //
    }

    /**
     * Special POST function to assign wrestlers to a title reign.
     */
    public function assignWrestlers(AssignWrestlersRequest $request, TitleReign $titleReign)
    {
        $titleReign->wrestlers()->sync($request->wrestlerIds);
        return response()->json(['message' => 'Wrestlers assigned to title reign.']);
    }

    /**
     * Special PATCH function to end a title reign
     * Updates the end dates
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
