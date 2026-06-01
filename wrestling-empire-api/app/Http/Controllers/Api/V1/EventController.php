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
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new EventsFilter();
        $filterItems =  $filter->transform($request);

        $event = Event::where($filterItems);

        // $includeWrestlers = $request->query('includeWrestlers');
        // $includeStipulations = $request->query('includeStipulations');

        $event = $event->with('wrestlers');
        $event = $event->with('stipulations');


        return EventResource::collection($event->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        return new EventResource(Event::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return new EventResource(
            $event->loadMissing('wrestlers', 'stipulations')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }

    /**
     * Special POST function to assign stipulations to event
     */
    public function assignStipulations(AssignStipulationsRequest $request, Event $event)
    {
        $event->stipulations()->sync($request->stipulationIds);
        return response()->json(['message' => 'Stipulations assigned to event.']);
    }

    /**
     * Special POST function to assign wrestlers to event
     */
    public function assignWrestlers(AssignWrestlersRequest $request, Event $event)
    {
        $event->wrestlers()->sync($request->wrestlerIds);
        return response()->json(['message' => 'Wrestlers assigned to event.']);
    }

    /**
     * Special PATCH function to simulate an event
     * Modifies the is_winner and finish_type of the event_wrestler row
     */
    public function simulate(SimulateRequest $request, Event $event)
    {
        $eventWrestlerIds = $event->wrestlers()->pluck('wrestlers.id');

        foreach ($request->results as $result) {
            // Check for if wrestler Id is in the list of wrestlers under this event.
            if (!$eventWrestlerIds->contains($result['wrestlerId'])) {
                abort(422, "Wrestler {$result['wrestlerId']} is not in this event.");
            }

            $event->wrestlers()->updateExistingPivot($result['wrestlerId'],
                [
                    'is_winner'=> $result['isWinner'], 
                    'finish_type' => $result['finishType']
                ]
            );
        }

        return response()->json(['message' => 'Event simulated.']);
    }
}
