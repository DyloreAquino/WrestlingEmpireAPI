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
            'wrestlers' => $this->when(isset($this->universe_wrestlers), function () {
                return WrestlerResource::collection($this->universe_wrestlers);
            }),
            'championships' => $this->when(isset($this->universe_championships), function () {
                return ChampionshipResource::collection($this->universe_championships);
            }),
        ];
    }
}
