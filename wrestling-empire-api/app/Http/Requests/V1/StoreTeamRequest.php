<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class StoreTeamRequest extends FormRequest
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
            'yearStart' => ['required', 'integer'],
            'monthStart' => ['required', 'integer', 'min:1', 'max:12'],
            'weekStart' => ['required', 'integer', 'min:1', 'max:4'],
            'yearEnd' => ['nullable', 'integer'],
            'monthEnd' => ['required', 'integer', 'min:1', 'max:12'],
            'weekEnd' => ['required', 'integer', 'min:1', 'max:4'],
        ];
    }

    #[Override]
    protected function prepareForValidation()
    {
        $this->merge([
            'year_start' => $this->yearStart,
            'month_start' => $this->monthStart,
            'week_start' => $this->weekStart,
            'year_end' => $this->yearEnd,
            'month_end' => $this->monthEnd,
            'week_end' => $this->weekEnd,
        ]);
    }
}
