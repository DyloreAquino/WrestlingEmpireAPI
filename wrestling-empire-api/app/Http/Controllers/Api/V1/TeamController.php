<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\TeamsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\AssignWrestlersRequest;
use App\Http\Requests\V1\EndDateRequest;
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

    /**
     * Special POST function to assign wrestlers to a team.
     */
    public function assignWrestlers(AssignWrestlersRequest $request, Team $team)
    {
        $team->wrestlers()->sync($request->wrestlerIds);
        return response()->json(['message' => 'Wrestlers assigned to team.']);
    }

    /**
     * Special PUT function to add more wrestlers to a team.
     */
    public function addWrestlers(AssignWrestlersRequest $request, Team $team)
    {
        $team->wrestlers()->syncWithoutDetaching($request->wrestlerIds);
        return response()->json(['message' => 'Wrestlers added to team.']);
    }

    /**
     * Special PATCH function to end a title reign
     * Updates the end dates
     */
    public function endTeam(EndDateRequest $request, Team $team)
    {
        $team->year_end = $request->yearEnd;
        $team->month_end = $request->monthEnd;
        $team->week_end = $request->weekEnd;
        $team->save();
        return response()->json(['message' => 'Team disbanded.']);
    }
}
