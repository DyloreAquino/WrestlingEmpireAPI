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
     * Display all wrestlers.
     * 
     * @group Wrestlers
     * 
     * @queryParam includeEvents bool Include all events associated to this wrestler.
     * @queryParam includeTitleReigns bool Include all title reigns associated to this wrestler.
     * @queryParam includeTeams bool Include all teams associated to this wrestler.
     * @queryParam id integer Filter by wrestler ID. Operators: [eq]. Example: id[eq]=1
     * @queryParam createdAt datetime Filter by creation date. Operators: [eq], [gt], [lt]. Example: createdAt[gt]=2026-01-01
     * @queryParam updatedAt datetime Filter by update date. Operators: [eq], [gt], [lt]. Example: updatedAt[gt]=2026-01-01
     * @queryParam name string Filter by wrestler name. Operators: [eq]. Example: name[eq]=Jon Moxley
     * @queryParam gender string Filter by gender (MALE, FEMALE, N/A). Operators: [eq]. Example: gender[eq]=MALE
     * @queryParam finisherName string Filter by finisher name. Operators: [eq]. Example: finisherName[eq]=Paradigm Shift
     * @queryParam allegiance string Filter by allegiance (HEEL, FACE, TWEENER). Operators: [eq]. Example: allegiance[eq]=FACE
     * @queryParam role string Filter by role (WRESTLER, MANAGER, BOOKER, REFEREE, CIVILIAN). Operators: [eq], [ne]. Example: role[eq]=WRESTLER
     * @queryParam territoryId integer Filter by territory ID. Operators: [eq]. Example: territoryId[eq]=2
     * @queryParam promotionId integer Filter by promotion ID. Operators: [eq]. Example: promotionId[eq]=1
     * @queryParam popularity integer Filter by popularity (50-100). Operators: [eq], [gt], [lt]. Example: popularity[gt]=80
     * @queryParam strength integer Filter by strength (50-100). Operators: [eq], [gt], [lt]. Example: strength[gt]=75
     * @queryParam skill integer Filter by skill (50-100). Operators: [eq], [gt], [lt]. Example: skill[gt]=85
     * @queryParam agility integer Filter by agility (50-100). Operators: [eq], [gt], [lt]. Example: agility[gt]=70
     * @queryParam stamina integer Filter by stamina (50-100). Operators: [eq], [gt], [lt]. Example: stamina[gt]=70
     * @queryParam attitude integer Filter by attitude (50-100). Operators: [eq], [gt], [lt]. Example: attitude[gt]=80
     * @queryParam managerId integer Filter by manager ID. Operators: [eq]. Example: managerId[eq]=5
     * @queryParam partnerId integer Filter by partner ID. Operators: [eq]. Example: partnerId[eq]=7
     * @queryParam storyFriendId integer Filter by story friend ID. Operators: [eq]. Example: storyFriendId[eq]=3
     * @queryParam storyEnemyId integer Filter by story enemy ID. Operators: [eq]. Example: storyEnemyId[eq]=9
     * @queryParam realFriendId integer Filter by real friend ID. Operators: [eq]. Example: realFriendId[eq]=4
     * @queryParam realEnemyId integer Filter by real enemy ID. Operators: [eq]. Example: realEnemyId[eq]=6
     */
    public function index(Request $request)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $filter = new WrestlersFilter();
        $queryItems = $filter->transform($request);

        // Scope queries exclusively to this isolated universe world
        $wrestlersQuery = Wrestler::where('universe_id', $universe->id)
            ->where($queryItems['where']);

        foreach ($queryItems['whereIn'] as [$column, $values]) {
            $wrestlersQuery = $wrestlersQuery->whereIn($column, $values);
        }

        $includeEvents = $request->query('includeEvents');
        $includeTitleReigns = $request->query('includeTitleReigns');
        $includeTeams = $request->query('includeTeams');

        if ($includeEvents) {
            $wrestlersQuery = $wrestlersQuery->with('events');
        }

        if ($includeTitleReigns) {
            $wrestlersQuery = $wrestlersQuery->with('titleReigns');
        }

        if ($includeTeams) {
            $wrestlersQuery = $wrestlersQuery->with('teams');
        }

        return WrestlerResource::collection($wrestlersQuery->get());
    }

    /**
     * Create a new wrestler.
     * 
     * @group Wrestlers
     */
    public function store(StoreWrestlerRequest $request)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Attach universe context before saving record instance
        $data = array_merge($request->all(), ['universe_id' => $universe->id]);
        $wrestler = Wrestler::create($data);

        return new WrestlerResource($wrestler);
    }

    /**
     * Display one wrestler.
     * 
     * Also shows the wrestler's events, title reigns, and teams.
     * 
     * @group Wrestlers
     */
    public function show(Request $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Protects profile lookup details from leakage across different user accounts
        $wrestler = Wrestler::where('universe_id', $universe->id)->findOrFail($id);

        return new WrestlerResource(
            $wrestler->loadMissing('events', 'titleReigns', 'teams', 'events.stipulations', 'events.wrestlers')
        );
    }

    /**
     * Update a wrestler's information.
     * 
     * @group Wrestlers
     */
    public function update(UpdateWrestlerRequest $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $wrestler = Wrestler::where('universe_id', $universe->id)->findOrFail($id);
        $wrestler->update($request->all());

        return new WrestlerResource($wrestler);
    }

    /**
     * Delete a wrestler.
     * 
     * @group Wrestlers
     */
    public function destroy(Request $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $wrestler = Wrestler::where('universe_id', $universe->id)->findOrFail($id);
        $wrestler->delete();

        return response()->json([
            'message' => 'Wrestler deleted successfully.'
        ], 200);
    }
}
