<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TerritoryResource extends JsonResource
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
            'likes' => $this->likes,
            'dislikes' => $this->dislikes,
            'updatedAt' => $this->updated_at,
            'wrestlers' => $this->when(isset($this->universe_wrestlers), function () {
                return WrestlerResource::collection($this->universe_wrestlers);
            }),
        ];
    }
}
