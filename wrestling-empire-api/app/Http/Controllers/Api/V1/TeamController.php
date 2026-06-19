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
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $filter = new TeamsFilter();
        $filterItems = $filter->transform($request);

        // Scope queries exclusively to this isolated universe world
        $teamQuery = Team::where('universe_id', $universe->id)
            ->where($filterItems);

        $teamQuery = $teamQuery->with('wrestlers');

        return TeamResource::collection($teamQuery->get());
    }

    /**
     * Create a new team.
     * 
     * @group Teams
     */
    public function store(StoreTeamRequest $request)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Attach universe context before saving record instance
        $data = array_merge($request->all(), ['universe_id' => $universe->id]);
        $team = Team::create($data);

        return new TeamResource($team);
    }

    /**
     * Display one team.
     * 
     * Also shows the wrestlers associated with the team.
     * 
     * @group Teams
     */
    public function show(Request $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Guarantees cross-tenant resource protection
        $team = Team::where('universe_id', $universe->id)->findOrFail($id);

        return new TeamResource(
            $team->loadMissing('wrestlers')
        );
    }

    /**
     * Update a team's information.
     * 
     * @group Teams
     */
    public function update(UpdateTeamRequest $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $team = Team::where('universe_id', $universe->id)->findOrFail($id);
        $team->update($request->all());

        return new TeamResource($team);
    }

    /**
     * Delete a team.
     * 
     * @group Teams
     */
    public function destroy(Request $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $team = Team::where('universe_id', $universe->id)->findOrFail($id);
        $team->delete();

        return response()->json([
            'message' => 'Team deleted successfully.'
        ], 200);
    }

    /**
     * Assign wrestlers to a team.
     * 
     * Replaces all members of a team to the list of wrestlers provided.
     * 
     * @group Teams
     */
    public function assignWrestlers(AssignWrestlersRequest $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $team = Team::where('universe_id', $universe->id)->findOrFail($id);

        // Security check: Ensure incoming wrestler IDs actually belong to this universe
        $validWrestlerCount = $universe->wrestlers()->whereIn('id', $request->wrestlerIds)->count();
        if ($validWrestlerCount !== count($request->wrestlerIds)) {
            return response()->json(['message' => 'One or more invalid wrestler IDs provided for this universe.'], 422);
        }

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
    public function addWrestlers(AssignWrestlersRequest $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $team = Team::where('universe_id', $universe->id)->findOrFail($id);

        // Security check: Ensure incoming wrestler IDs actually belong to this universe
        $validWrestlerCount = $universe->wrestlers()->whereIn('id', $request->wrestlerIds)->count();
        if ($validWrestlerCount !== count($request->wrestlerIds)) {
            return response()->json(['message' => 'One or more invalid wrestler IDs provided for this universe.'], 422);
        }

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
    public function endTeam(EndDateRequest $request, $id)
    {
       $universe = $request->attributes->get('active_universe');
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $team = Team::where('universe_id', $universe->id)->findOrFail($id);

        $team->year_end = $request->yearEnd;
        $team->month_end = $request->monthEnd;
        $team->week_end = $request->weekEnd;
        $team->save();

        return response()->json(['message' => 'Team disbanded.']);
    }
}
