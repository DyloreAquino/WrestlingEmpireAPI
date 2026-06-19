<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PromotionResource extends JsonResource
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
            'wrestlers' => WrestlerResource::collection($this->when(
                isset($this->universe_wrestlers), 
                fn() => $this->universe_wrestlers
            )),
            'championships' => ChampionshipResource::collection($this->when(
                isset($this->universe_championships), 
                fn() => $this->universe_championships
            )),
        ];
    }
}
