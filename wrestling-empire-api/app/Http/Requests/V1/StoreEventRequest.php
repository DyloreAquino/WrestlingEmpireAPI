<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class StoreEventRequest extends FormRequest
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
        return [
            'type' => ['required', Rule::in(['PROMO', 'MATCH', 'SEGMENT', 'BRAWL'])],
            'placement' => ['required', Rule::in(['UNDER', 'MID', 'SEMI', 'MAIN'])],
            'matchTypeId' => ['nullable', 'integer', 'exists:match_types,id'],
            'championshipId' => ['nullable', 'integer', 'exists:championships,id'],
            'showId' => ['required', 'integer', 'exists:shows,id'],
            'rating' => ['nullable', 'integer']
        ];
    }

    #[Override]
    protected function prepareForValidation()
    {
        $this->merge([
            'match_type_id' => $this->matchTypeId,
            'championship_id' => $this->championshipId,
            'show_id' => $this->showId,
        ]);
    }
}
