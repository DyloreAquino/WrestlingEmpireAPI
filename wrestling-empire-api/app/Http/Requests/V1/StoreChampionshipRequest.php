<?php

namespace App\Http\Requests\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class StoreChampionshipRequest extends FormRequest
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
        return [
            'name' => ['required'],
            'division' => ['required', Rule::in(['TAG', 'WORLD', 'MID', 'WOMENS'])],
            'promotionId' => ['required', 'numeric'],
        ];
    }

    #[Override]
    protected function prepareForValidation()
    {
        $this->merge([
            'promotion_id' => $this->postalCode
        ]);
    }
}
