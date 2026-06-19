<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ChampionshipsFilter;
use App\Http\Controllers\Controller;
use App\Models\Championship;
use App\Http\Requests\V1\StoreChampionshipRequest;
use App\Http\Requests\V1\UpdateChampionshipRequest;
use App\Http\Resources\V1\ChampionshipResource;
use Illuminate\Http\Request;

class ChampionshipController extends Controller
{
    /**
     * Display all championships for the active universe.
     */
    public function index(Request $request)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $filter = new ChampionshipsFilter();
        $queryItems = $filter->transform($request);

        // Scope the base query to the active universe
        $championshipQuery = Championship::where('universe_id', $universe->id)
            ->where($queryItems['where']);

        foreach ($queryItems['whereIn'] as [$column, $values]) {
            $championshipQuery = $championshipQuery->whereIn($column, $values);
        }

        $includeTitleReigns = $request->query('includeTitleReigns');

        if ($includeTitleReigns) {
            $championshipQuery = $championshipQuery->with('titleReigns.wrestlers');
        }

        $championshipQuery = $championshipQuery->with('currentReign.wrestlers');

        return ChampionshipResource::collection($championshipQuery->get());
    }

    /**
     * Create a new championship inside the active universe.
     */
    public function store(StoreChampionshipRequest $request)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Merge universe_id into validated data array securely
        $data = array_merge($request->all(), ['universe_id' => $universe->id]);
        $championship = Championship::create($data);

        return new ChampionshipResource($championship);
    }

    /**
     * Display one championship.
     */
    public function show(Request $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Verify ownership by querying through the active universe relationship
        $championship = Championship::where('universe_id', $universe->id)->findOrFail($id);

        return new ChampionshipResource(
            $championship->loadMissing('titleReigns.wrestlers', 'currentReign.wrestlers')
        );
    }

    /**
     * Update a championship's information.
     */
    public function update(UpdateChampionshipRequest $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $championship = Championship::where('universe_id', $universe->id)->findOrFail($id);
        $championship->update($request->all());

        return new ChampionshipResource($championship);
    }

    /**
     * Delete a championship.
     */
    public function destroy(Request $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $championship = Championship::where('universe_id', $universe->id)->findOrFail($id);
        $championship->delete();

        return response()->json([
            'message' => 'Championship deleted successfully.'
        ], 200);
    }
}