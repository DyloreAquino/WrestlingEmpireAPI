<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class UpdateWrestlerRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
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
                'injured' => ['required', 'boolean']
            ];
        } else {
            return [
                'name' => ['sometimes', 'required', 'string'],
                'gender' => ['sometimes', 'required', Rule::in(['MALE', 'FEMALE', 'N/A'])],
                'finisherName' => ['sometimes', 'required', 'string'],
                'allegiance' => ['sometimes', 'required', Rule::in(['HEEL', 'FACE', 'TWEENER'])],
                'role' => ['sometimes', 'required', Rule::in(['WRESTLER', 'MANAGER', 'BOOKER', 'REFEREE', 'CIVILIAN'])],
                'territoryId' => ['sometimes', 'required', 'integer', 'exists:territories,id'],
                'promotionId' => ['sometimes', 'required', 'integer', 'exists:promotions,id'],
                'popularity' => ['sometimes', 'required', 'integer', 'min:50', 'max:100'],
                'strength' => ['sometimes', 'required', 'integer', 'min:50', 'max:100'],
                'skill' => ['sometimes', 'required', 'integer', 'min:50', 'max:100'],
                'agility' => ['sometimes', 'required', 'integer', 'min:50', 'max:100'],
                'stamina' => ['sometimes', 'required', 'integer', 'min:50', 'max:100'],
                'attitude' => ['sometimes', 'required', 'integer', 'min:50', 'max:100'],
                'managerId' => ['sometimes', 'nullable', 'integer', 'exists:wrestlers,id'],
                'partnerId' => ['sometimes', 'nullable', 'integer', 'exists:wrestlers,id'],
                'storyFriendId' => ['sometimes', 'nullable', 'integer', 'exists:wrestlers,id'],
                'storyEnemyId' => ['sometimes', 'nullable', 'integer', 'exists:wrestlers,id'],
                'realFriendId' => ['sometimes', 'nullable', 'integer', 'exists:wrestlers,id'],
                'realEnemyId' => ['sometimes', 'nullable', 'integer', 'exists:wrestlers,id'],
                'injured' => ['sometimes', 'required', 'boolean']
            ];
        }
        
    }

    #[Override]
    protected function prepareForValidation()
    {
        $map = [
            'finisherName'  => 'finisher_name',
            'territoryId'   => 'territory_id',
            'promotionId'   => 'promotion_id',
            'managerId'     => 'manager_id',
            'partnerId'     => 'partner_id',
            'storyFriendId' => 'story_friend_id',
            'storyEnemyId'  => 'story_enemy_id',
            'realFriendId'  => 'real_friend_id',
            'realEnemyId'   => 'real_enemy_id',
        ];

        $merge = [];

        foreach ($map as $camel => $snake) {
            if ($this->has($camel)) {
                $merge[$snake] = $this->$camel;
            }
        }

        $this->merge($merge);
    }
}
