<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class UpdateShowRequest extends FormRequest
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
                'name' => ['nullable'],
                'year' => ['required', 'integer'],
                'month' => ['required', 'integer', 'min:1', 'max:12'],
                'week' => ['required', 'integer', 'min:1', 'max:4'],
                'type' => ['required', Rule::in(['TV', 'PPV', 'SPECIAL'])],
                'territoryId' => ['required', 'integer']
            ];
        } else {
            return [
                'name' => ['sometimes', 'nullable'],
                'year' => ['sometimes', 'required', 'integer'],
                'month' => ['sometimes', 'required', 'integer', 'min:1', 'max:12'],
                'week' => ['sometimes', 'required', 'integer', 'min:1', 'max:4'],
                'type' => ['sometimes', 'required', Rule::in(['TV', 'PPV', 'SPECIAL'])],
                'territoryId' => ['sometimes', 'required', 'integer']
            ];
        }
        
    }

    #[Override]
    protected function prepareForValidation()
    {
        if ($this->territoryId) {
            $this->merge([
                'territory_id' => $this->territoryId,
            ]);
        }
    }
}
