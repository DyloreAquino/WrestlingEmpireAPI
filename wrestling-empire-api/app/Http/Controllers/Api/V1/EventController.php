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
        $filter = new EventsFilter();
        $queryItems =  $filter->transform($request);

        $event = Event::where($queryItems['where']);

        foreach ($queryItems['whereIn'] as [$column, $values]) {
            $event = $event->whereIn($column, $values);
        }

        $event = $event->with('wrestlers');
        $event = $event->with('stipulations');


        return EventResource::collection($event->get());
    }

    /**
     * Create a new event.
     * 
     * @group Events
     */
    public function store(StoreEventRequest $request)
    {
        return new EventResource(Event::create($request->all()));
    }

    /**
     * Display one event.
     * 
     * @group Events
     */
    public function show(Event $event)
    {
        return new EventResource(
            $event->loadMissing('wrestlers', 'stipulations')
        );
    }

    /**
     * Update an event's information.
     * 
     * @group Events
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->all());
        return new EventResource($event);
    }

    /**
     * Delete an event.
     * 
     * @group Events
     */
    public function destroy(Event $event)
    {
        //
    }

    /**
     * Set the stipulations for an event.
     * 
     * @group Events
     */
    public function assignStipulations(AssignStipulationsRequest $request, Event $event)
    {
        $event->stipulations()->sync($request->stipulationIds);
        return response()->json(['message' => 'Stipulations assigned to event.']);
    }

    /**
     * Assign wrestlers to an event.
     * 
     * @group Events
     */
    public function assignWrestlers(AssignWrestlersRequest $request, Event $event)
    {
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
    public function simulate(SimulateRequest $request, Event $event)
    {
        // Setup the current reign's information. We need the actual object and a list of the wrestler's ids for the reign.
        $currentReign = null;
        $currentReignWrestlerIds = [];
        if ($event->championship_id) {
            $currentReign = $event->championship->currentReign;
            $currentReignWrestlerIds = $currentReign?->wrestlers()->pluck('wrestlers.id')->toArray();
        }   
        
        // Get the wrestlers for the event.
        $eventWrestlerIds = $event->wrestlers()->pluck('wrestlers.id');
        $eventWinnerIds = [];

        foreach ($request->results as $result) {
            // Check for if wrestler Id is in the list of wrestlers under this event.
            if (!$eventWrestlerIds->contains($result['wrestlerId'])) {
                abort(422, "Wrestler {$result['wrestlerId']} is not in this event.");
            }

            // Update the event_wrestlers table
            $event->wrestlers()->updateExistingPivot($result['wrestlerId'],
                [
                    'is_winner'=> $result['isWinner'], 
                    'finish_type' => $result['finishType']
                ]
            );

            // If they won, put them in the winner list.
            if ($result['isWinner'] == true) {
                $eventWinnerIds[] = $result['wrestlerId'];
            }
        }

        // Compare the winner list to the current reign's wrestler list.
        sort($eventWinnerIds);
        sort($currentReignWrestlerIds);
        $isNewReign = $eventWinnerIds !== $currentReignWrestlerIds;
        
        // A new reign triggers if we have different winners from the current reign's list.
        if ($isNewReign && $event->championship_id) {

            // Get date details from show
            $eventShow = $event->show;

            // Set the end date of the current reign
            if ($currentReign) {
                $currentReign->year_end = $eventShow->year;
                $currentReign->month_end = $eventShow->month;
                $currentReign->week_end = $eventShow->week;
                $currentReign->save();
            }
            
            // Create a new reign.
            $newReign = TitleReign::create([
                'championship_id' => $event->championship_id,
                'year_start' => $eventShow->year,
                'month_start' => $eventShow->month,
                'week_start' => $eventShow->week,
            ]);

            $newReign->wrestlers()->attach($eventWinnerIds);
        }

        $event->notes = $request->notes;
        $event->save();

        return response()->json(['message' => 'Event simulated.']);
    }
}
