<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class UpdateTeamRequest extends FormRequest
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
                'yearStart' => ['required', 'integer'],
                'monthStart' => ['required', 'integer', 'min:1', 'max:12'],
                'weekStart' => ['required', 'integer', 'min:1', 'max:4'],
                'yearEnd' => ['nullable', 'integer'],
                'monthEnd' => ['nullable', 'integer', 'min:1', 'max:12'],
                'weekEnd' => ['nullable', 'integer', 'min:1', 'max:4'],
            ];
        } else {
            return [
                'name' => ['sometimes', 'required', 'string'],
                'yearStart' => ['sometimes', 'required', 'integer'],
                'monthStart' => ['sometimes', 'required', 'integer', 'min:1', 'max:12'],
                'weekStart' => ['sometimes', 'required', 'integer', 'min:1', 'max:4'],
                'yearEnd' => ['sometimes', 'nullable', 'integer'],
                'monthEnd' => ['sometimes', 'nullable', 'integer', 'min:1', 'max:12'],
                'weekEnd' => ['sometimes', 'nullable', 'integer', 'min:1', 'max:4'],
            ];
        }
        
    }

    #[Override]
    protected function prepareForValidation()
    {
        $map = [
            'yearStart'  => 'year_start',
            'monthStart' => 'month_start',
            'weekStart'  => 'week_start',
            'yearEnd'    => 'year_end',
            'monthEnd'   => 'month_end',
            'weekEnd'    => 'week_end',
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
