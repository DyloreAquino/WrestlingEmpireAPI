<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowResource extends JsonResource
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
            'universeId' => $this->universe_id,
            'name' => $this-> name,
            'year' => $this->year,
            'month' => $this->month,
            'week' => $this->week,
            'type' => $this->type,
            'territoryId' => $this->territory_id,
            'promotionId' => $this->promotion_id,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'events' => EventResource::collection($this->whenLoaded('events'))
        ];
    }
}
