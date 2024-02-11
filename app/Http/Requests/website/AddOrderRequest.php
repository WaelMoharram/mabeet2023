<?php

namespace App\Http\Requests\website;

use Illuminate\Foundation\Http\FormRequest;

class AddOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'city_id' => 'required|exists:cities,id',
            'season_id' => 'required|integer',
            'name' => 'required|string|min:2|max:191',
            'description' => 'required|string|min:2|max:1000',
            'distance_id' => 'required|integer',
            'unit_type_id' => 'required|exists:unit_types,id',
            'unit_number'=>'required|integer',
            'guest_number' => 'required|integer',
            'budget_id' => 'required|integer',
            'accept' => 'required|accepted',
        ];
    }
}
