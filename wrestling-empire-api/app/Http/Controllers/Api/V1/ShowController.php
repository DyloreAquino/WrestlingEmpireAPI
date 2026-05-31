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
     * Store a newly created resource in storage.
     */
    public function store(StoreShowRequest $request)
    {
        return new ShowResource(Show::create($request->all()));
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
