<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Show;
use App\Http\Requests\StoreShowRequest;
use App\Http\Requests\UpdateShowRequest;
use App\Http\Resources\V1\ShowResource;
use Illuminate\Http\Request;
use App\Filters\V1\ShowsFilter;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ShowsFilter();
        $filterItems =  $filter->transform($request);

        $show = Show::where($filterItems);

        return ShowResource::collection($show->get());
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
    public function store(StoreShowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Show $show)
    {
        return new ShowResource(
            $show->loadMissing('events.wrestlers', 'events.stipulations')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Show $show)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShowRequest $request, Show $show)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Show $show)
    {
        //
    }
}
