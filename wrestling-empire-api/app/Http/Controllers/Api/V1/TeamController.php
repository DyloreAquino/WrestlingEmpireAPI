<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\TeamsFilter;
use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Http\Requests\V1\StoreTeamRequest;
use App\Http\Requests\V1\UpdateTeamRequest;
use App\Http\Resources\V1\TeamResource;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new TeamsFilter();
        $filterItems =  $filter->transform($request);

        $team = Team::where($filterItems);

        $team = $team->with('wrestlers');

        return TeamResource::collection($team->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        return new TeamResource(Team::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return new TeamResource(
            $team->loadMissing('wrestlers')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
