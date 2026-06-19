<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\EventsFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\AssignStipulationsRequest;
use App\Models\Event;
use App\Http\Requests\V1\StoreEventRequest;
use App\Http\Requests\V1\UpdateEventRequest;
use App\Http\Requests\V1\AssignWrestlersRequest;
use App\Http\Requests\V1\SimulateRequest;
use App\Http\Resources\V1\EventResource;
use App\Models\TitleReign;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class EventController extends Controller
{
    /**
     * Display all events.
     * 
     * Also displays event's stipulations and wrestlers assigned to it.
     * 
     * @group Events
     * 
     * @queryParam id integer Filter by event ID. Operators: [eq]. Example: id[eq]=1
     * @queryParam createdAt datetime Filter by creation date. Operators: [eq], [gt], [lt]. Example: createdAt[gt]=2026-01-01
     * @queryParam updatedAt datetime Filter by update date. Operators: [eq], [gt], [lt]. Example: updatedAt[gt]=2026-01-01
     * @queryParam type string Filter by event type (PROMO, MATCH, SEGMENT, BRAWL). Operators: [eq], [ne]. Example: type[eq]=MATCH
     * @queryParam placement string Filter by card placement (UNDER, MID, SEMI, MAIN). Operators: [eq], [ne]. Example: placement[eq]=MAIN
     * @queryParam matchTypeId integer Filter by match type ID. Operators: [eq]. Example: matchTypeId[eq]=2
     * @queryParam championshipId integer Filter by championship ID. Operators: [eq]. Example: championshipId[eq]=1
     * @queryParam showId integer Filter by show ID. Operators: [eq]. Example: showId[eq]=4
     */
    public function index(Request $request)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $filter = new EventsFilter();
        $queryItems = $filter->transform($request);

        // Scope queries exclusively through shows belonging to this universe
        $eventQuery = Event::whereHas('show', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->where($queryItems['where']);

        foreach ($queryItems['whereIn'] as [$column, $values]) {
            $eventQuery = $eventQuery->whereIn($column, $values);
        }

        $eventQuery = $eventQuery->with(['wrestlers', 'stipulations']);

        return EventResource::collection($eventQuery->get());
    }

    /**
     * Create a new event.
     * 
     * @group Events
     */
    public function store(StoreEventRequest $request)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Security check: Validate that the targeted show belongs to the active universe
        $universe->shows()->findOrFail($request->show_id);

        // Optional: If a championship is attached, ensure it belongs to this universe too
        if ($request->championship_id) {
            $universe->championships()->findOrFail($request->championship_id);
        }

        return new EventResource(Event::create($request->all()));
    }

    /**
     * Display one event.
     * 
     * @group Events
     */
    public function show(Request $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Guarantee cross-tenant privacy bounds
        $event = Event::whereHas('show', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        return new EventResource(
            $event->loadMissing('wrestlers', 'stipulations')
        );
    }

    /**
     * Update an event's information.
     * 
     * @group Events
     */
    public function update(UpdateEventRequest $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $event = Event::whereHas('show', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        if ($request->show_id) {
            $universe->shows()->findOrFail($request->show_id);
        }

        $event->update($request->all());
        return new EventResource($event);
    }

    /**
     * Delete an event.
     * 
     * @group Events
     */
    public function destroy(Request $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $event = Event::whereHas('show', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        $event->delete();

        return response()->json([
            'message' => 'Event deleted successfully.'
        ], 200);
    }

    /**
     * Set the stipulations for an event.
     * 
     * @group Events
     */
    public function assignStipulations(AssignStipulationsRequest $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $event = Event::whereHas('show', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        // Stipulations are global metadata; no cross-universe injection checks needed here
        $event->stipulations()->sync($request->stipulationIds);
        return response()->json(['message' => 'Stipulations assigned to event.']);
    }

    /**
     * Assign wrestlers to an event.
     * 
     * @group Events
     */
    public function assignWrestlers(AssignWrestlersRequest $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $event = Event::whereHas('show', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        // Security check: Ensure incoming wrestler IDs belong strictly to this universe
        $validCount = $universe->wrestlers()->whereIn('id', $request->wrestlerIds)->count();
        if ($validCount !== count($request->wrestlerIds)) {
            return response()->json(['message' => 'Invalid wrestler allocation for this universe state.'], 422);
        }

        $event->wrestlers()->sync($request->wrestlerIds);
        return response()->json(['message' => 'Wrestlers assigned to event.']);
    }

    /**
     * Simulate an event.
     * 
     * Modifies the is_winner and finish_type of the event_wrestler row
     * 
     * @group Events
     */
    public function simulate(SimulateRequest $request, $id)
    {
        $universe = $request->active_universe;
        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        $event = Event::whereHas('show', function ($query) use ($universe) {
            $query->where('universe_id', $universe->id);
        })->findOrFail($id);

        // Setup the current reign's information.
        $currentReign = null;
        $currentReignWrestlerIds = [];
        if ($event->championship_id) {
            $currentReign = $event->championship->currentReign;
            $currentReignWrestlerIds = $currentReign?->wrestlers()->pluck('wrestlers.id')->toArray() ?? [];
        }   
        
        // Get the wrestlers assigned to the event.
        $eventWrestlerIds = $event->wrestlers()->pluck('wrestlers.id');
        $eventWinnerIds = [];

        foreach ($request->results as $result) {
            if (!$eventWrestlerIds->contains($result['wrestlerId'])) {
                abort(422, "Wrestler {$result['wrestlerId']} is not in this event.");
            }

            // Update pivot records cleanly
            $event->wrestlers()->updateExistingPivot($result['wrestlerId'], [
                'is_winner'=> $result['isWinner'], 
                'finish_type' => $result['finishType']
            ]);

            if ($result['isWinner'] == true) {
                $eventWinnerIds[] = $result['wrestlerId'];
            }
        }

        // Compare the winner list to the current reign's wrestler list.
        sort($eventWinnerIds);
        sort($currentReignWrestlerIds);
        $isNewReign = $eventWinnerIds !== $currentReignWrestlerIds;
        
        // A new title reign logic engine execution path
        if ($isNewReign && $event->championship_id) {
            $eventShow = $event->show;

            if ($currentReign) {
                $currentReign->year_end = $eventShow->year;
                $currentReign->month_end = $eventShow->month;
                $currentReign->week_end = $eventShow->week;
                $currentReign->save();
            }
            
            // Generate a fresh tracking history record line
            $newReign = TitleReign::create([
                'championship_id' => $event->championship_id,
                'year_start' => $eventShow->year,
                'month_start' => $eventShow->month,
                'week_start' => $eventShow->week,
            ]);

            $newReign->wrestlers()->attach($eventWinnerIds);
        }

        $event->notes = $request->notes;
        $event->rating = $request->rating;
        $event->save();

        return response()->json(['message' => 'Event simulated.']);
    }
}
