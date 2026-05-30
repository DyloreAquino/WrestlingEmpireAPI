<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WrestlerResource extends JsonResource
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
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'name' => $this->name,
            'gender' => $this->gender,
            'finisherName' => $this->finisher_name,
            'allegiance' => $this->allegiance,
            'role' => $this->role,
            'territoryId' => $this->territory_id,
            'promotionId' => $this->promotion_id,
            'popularity' => $this->popularity,
            'strength' => $this->strength,
            'skill' => $this->skill,
            'agility' => $this->agility,
            'stamina' => $this->stamina,
            'attitude' => $this->attitude,
            'managerId' => $this->manager_id,
            'partnerId' => $this->partner_id,
            'storyFriendId' => $this->story_friend_id,
            'storyEnemyId' => $this->story_enemy_id,
            'realFriendId' => $this->real_friend_id,
            'realEnemyId' => $this->real_enemy_id,
            'isWinner' => $this->whenPivotLoaded('event_wrestler', fn() => $this->pivot->is_winner),
            'finishType' => $this->whenPivotLoaded('event_wrestler', fn() => $this->pivot->finish_type),
        ];
    }
}
