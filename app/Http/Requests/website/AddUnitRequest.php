<?php

namespace App\Http\Requests\website;

use Illuminate\Foundation\Http\FormRequest;

class AddUnitRequest extends FormRequest
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
            'city_id'=>'required|numeric|exists:cities,id',
            'name'=>'required|string|min:2|max:191',
            'description'=>'required|string|min:2|max:1000',
            'amount'=>'required|numeric|min:0|max:10000000',
            'address'=>'required|string|min:2|max:191',
            'lat'=>'required|string|min:2|max:191',
            'lng'=>'required|string|min:2|max:191',
            'unit_type_id'=>'required|numeric|exists:unit_types,id',
            'guest_numbers'=>'required|numeric|min:1|max:1000',
            'guestNumbersSelect'=>'required|numeric|min:1|max:1000',
//            'budget_id'=>'required|numeric|exists:budgets,id',
            'service_ids.*'=>'required|numeric|exists:services,id',
            'image1'=>'required|image',
            'image2'=>'nullable|image',
            'image3'=>'nullable|image',
            'image4'=>'nullable|image',
            'image5'=>'nullable|image',
            'image6'=>'nullable|image',
            'image7'=>'nullable|image',
        ];
    }
}
