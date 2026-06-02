<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class UpdateChampionshipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // TODO: authorization
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
                'division' => ['required', Rule::in(['TAG', 'WORLD', 'MID', 'WOMENS'])],
                'promotionId' => ['required', 'numeric'],
            ];
        } else {
            return [
                'name' => ['sometimes', 'required', 'string'],
                'division' => ['sometimes', 'required', Rule::in(['TAG', 'WORLD', 'MID', 'WOMENS'])],
                'promotionId' => ['sometimes', 'required', 'numeric'],
            ];
        }
        
    }

    #[Override]
    protected function prepareForValidation()
    {
        if ($this->promotionId) {
            $this->merge([
                'promotion_id' => $this->promotionId
            ]);
        }
    }
}
