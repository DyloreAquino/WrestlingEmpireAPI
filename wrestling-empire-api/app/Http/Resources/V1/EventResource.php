<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'placement' => $this->placement,
            'matchTypeId' => $this->match_type_id,
            'championshipId' => $this->championship_id,
            'showId' => $this->show_id,
            'notes' => $this->notes,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'wrestlers' => WrestlerResource::collection($this->whenLoaded('wrestlers')),
            'isWinner' => $this->whenPivotLoaded('event_wrestler', fn() => $this->pivot->is_winner),
            'finishType' => $this->whenPivotLoaded('event_wrestler', fn() => $this->pivot->finish_type),
            'stipulations' => StipulationResource::collection($this->whenLoaded('stipulations')),
        ];
    }
}
