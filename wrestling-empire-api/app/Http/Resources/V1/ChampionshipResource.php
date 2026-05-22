<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChampionshipResource extends JsonResource
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
            'name' => $this->name,
            'division' => $this->division,
            'promotionId' => $this->promotion_id,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at
        ];
    }
}
