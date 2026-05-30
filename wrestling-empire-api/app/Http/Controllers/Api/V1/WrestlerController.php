<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Wrestler;
use App\Http\Requests\V1\StoreWrestlerRequest;
use App\Http\Requests\V1\UpdateWrestlerRequest;
use App\Http\Resources\V1\WrestlerResource;
use App\Filters\V1\WrestlersFilter;
use Illuminate\Http\Request;

class WrestlerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new WrestlersFilter();
        $queryItems =  $filter->transform($request);

        $wrestler = Wrestler::where($queryItems);

        $includeEvents = $request->query('includeEvents');
        $includeTitleReigns = $request->query('includeTitleReigns');
        $includeTeams = $request->query('includeTeams');

        if ($includeEvents) {
            $wrestler = $wrestler->with('events');
        }

        if ($includeTitleReigns) {
            $wrestler = $wrestler->with('titleReigns');
        }

        if ($includeTeams) {
            $wrestler = $wrestler->with('teams');
        }

        return WrestlerResource::collection($wrestler->get());
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
    public function store(StoreWrestlerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wrestler $wrestler)
    {
        return new WrestlerResource(
            $wrestler->loadMissing('events', 'titleReigns', 'teams')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wrestler $wrestler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWrestlerRequest $request, Wrestler $wrestler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wrestler $wrestler)
    {
        //
    }
}
