<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SimulateRequest extends FormRequest
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
            'results' => ['required', 'array'],
            'results.*.wrestlerId' => ['required', 'integer', 'exists:wrestlers,id'],
            'results.*.isWinner' => ['required', 'boolean'],
            'results.*.finishType' => ['required', Rule::in(
                ['UNFINISHED', 'PIN', 'SUBMISSION', 'DISQUALIFICATION', 'COUNTOUT', 'TIMEOUT', 'ELIMINATION', 'SPECIAL']
            )],
            'notes' => ['nullable', 'string']
        ];
    }
}
