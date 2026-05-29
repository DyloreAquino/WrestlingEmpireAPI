<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\TitleReignsFilter;
use App\Http\Controllers\Controller;
use App\Models\TitleReign;
use App\Http\Requests\StoreTitleReignRequest;
use App\Http\Requests\UpdateTitleReignRequest;
use App\Http\Resources\V1\TitleReignResource;
use Illuminate\Http\Request;

// TODO: Create TitleReignsQuery
class TitleReignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new TitleReignsFilter();
        $queryItems =  $filter->transform($request);

        if (count($queryItems) == 0) {
            return TitleReignResource::collection(TitleReign::all());
        } else {
            return TitleReignResource::collection(TitleReign::where($queryItems)->get());
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
    public function store(StoreTitleReignRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TitleReign $titleReign)
    {
        return new TitleReignResource($titleReign);
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
