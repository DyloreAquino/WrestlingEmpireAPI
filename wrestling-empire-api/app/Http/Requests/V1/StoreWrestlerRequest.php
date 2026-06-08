<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class StoreWrestlerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // TODO: Add authorization
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'gender' => ['required', Rule::in(['MALE', 'FEMALE', 'N/A'])],
            'finisherName' => ['required', 'string'],
            'allegiance' => ['required', Rule::in(['HEEL', 'FACE', 'TWEENER'])],
            'role' => ['required', Rule::in(['WRESTLER', 'MANAGER', 'BOOKER', 'REFEREE', 'CIVILIAN'])],
            'territoryId' => ['required', 'integer', 'exists:territories,id'],
            'promotionId' => ['required', 'integer', 'exists:promotions,id'],
            'popularity' => ['required', 'integer', 'min:50', 'max:100'],
            'strength' => ['nullable', 'integer', 'min:50', 'max:100'],
            'skill' => ['nullable', 'integer', 'min:50', 'max:100'],
            'agility' => ['nullable', 'integer', 'min:50', 'max:100'],
            'stamina' => ['nullable', 'integer', 'min:50', 'max:100'],
            'attitude' => ['nullable', 'integer', 'min:50', 'max:100'],
            'managerId' => ['nullable', 'integer', 'exists:wrestlers,id'],
            'partnerId' => ['nullable', 'integer', 'exists:wrestlers,id'],
            'storyFriendId' => ['nullable', 'integer', 'exists:wrestlers,id'],
            'storyEnemyId' => ['nullable', 'integer', 'exists:wrestlers,id'],
            'realFriendId' => ['nullable', 'integer', 'exists:wrestlers,id'],
            'realEnemyId' => ['nullable', 'integer', 'exists:wrestlers,id'],
        ];
    }

    #[Override]
    protected function prepareForValidation()
    {
        $this->merge([
            'finisher_name' => $this->finisherName,
            'territory_id' => $this->territoryId,
            'promotion_id' => $this->promotionId,
            'manager_id' => $this->managerId,
            'partner_id' => $this->partnerId,
            'story_friend_id' => $this->storyFriendId,
            'story_enemy_id' => $this->storyEnemyId,
            'real_friend_id' => $this->realFriendId,
            'real_enemy_id' => $this->realEnemyId,
        ]);
    }
}
