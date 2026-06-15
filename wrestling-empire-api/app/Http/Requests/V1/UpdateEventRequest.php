<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class UpdateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // TODO: add authorization
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
                'type' => ['required', Rule::in(['PROMO', 'MATCH', 'SEGMENT', 'BRAWL'])],
                'placement' => ['required', Rule::in(['UNDER', 'MID', 'SEMI', 'MAIN'])],
                'matchTypeId' => ['nullable', 'integer', 'exists:match_types,id'],
                'championshipId' => ['nullable', 'integer', 'exists:championships,id'],
                'showId' => ['required', 'integer', 'exists:shows,id'],
                'rating' => ['nullable', 'integer']
            ];
        } else {
            return [
                'type' => ['sometimes', 'required', Rule::in(['PROMO', 'MATCH', 'SEGMENT', 'BRAWL'])],
                'placement' => ['sometimes', 'required', Rule::in(['UNDER', 'MID', 'SEMI', 'MAIN'])],
                'matchTypeId' => ['sometimes', 'nullable', 'integer', 'exists:match_types,id'],
                'championshipId' => ['sometimes', 'nullable', 'integer', 'exists:championships,id'],
                'showId' => ['sometimes', 'required', 'integer', 'exists:shows,id'],
                'rating' => ['sometimes', 'nullable', 'integer']
            ];
        }
        
    }

    #[Override]
    protected function prepareForValidation()
    {
        $map = [
            'matchTypeId'     => 'match_type_id',
            'championshipId'  => 'championship_id',
            'showId'          => 'show_id',
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
