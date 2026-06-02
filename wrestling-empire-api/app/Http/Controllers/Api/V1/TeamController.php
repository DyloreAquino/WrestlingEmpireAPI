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
     * Display all teams.
     * 
     * Also shows the wrestlers associated to each team.
     * 
     * @group Teams
     * 
     * @queryParam id integer Filter by team ID. Operators: [eq]. Example: id[eq]=1
     * @queryParam name string Filter by team name. Operators: [eq]. Example: name[eq]=The Bloodline
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
        $filter = new TeamsFilter();
        $filterItems =  $filter->transform($request);

        $team = Team::where($filterItems);

        $team = $team->with('wrestlers');

        return TeamResource::collection($team->get());
    }

    /**
     * Create a new team.
     * 
     * @group Teams
     */
    public function store(StoreTeamRequest $request)
    {
        return new TeamResource(Team::create($request->all()));
    }

    /**
     * Display one team.
     * 
     * Also shows the wrestlers associated with the team.
     * 
     * @group Teams
     */
    public function show(Team $team)
    {
        return new TeamResource(
            $team->loadMissing('wrestlers')
        );
    }

    /**
     * Update a team's information.
     * 
     * @group Teams
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
    }

    /**
     * Delete a team.
     * 
     * @group Teams
     */
    public function destroy(Team $team)
    {
        //
    }

    /**
     * Assign wrestlers to a team.
     * 
     * Replaces all members of a team to the list of wrestlers provided.
     * 
     * @group Teams
     */
    public function assignWrestlers(AssignWrestlersRequest $request, Team $team)
    {
        $team->wrestlers()->sync($request->wrestlerIds);
        return response()->json(['message' => 'Wrestlers assigned to team.']);
    }

    /**
     * Add wrestlers to a team.
     * 
     * Appends wrestlers to an already existing roster of a team.
     * 
     * @group Teams
     */
    public function addWrestlers(AssignWrestlersRequest $request, Team $team)
    {
        $team->wrestlers()->syncWithoutDetaching($request->wrestlerIds);
        return response()->json(['message' => 'Wrestlers added to team.']);
    }

    /**
     * Disband a team.
     * 
     * Updates the end dates of a team.
     * 
     * @group Teams
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
