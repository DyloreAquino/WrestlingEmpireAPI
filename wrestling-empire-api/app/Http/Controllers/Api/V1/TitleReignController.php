<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\TitleReignsFilter;
use App\Http\Controllers\Controller;
use App\Models\TitleReign;
use App\Http\Requests\StoreTitleReignRequest;
use App\Http\Requests\UpdateTitleReignRequest;
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTitleReignRequest $request)
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(TitleReign $titleReign)
    {
        //
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
}
