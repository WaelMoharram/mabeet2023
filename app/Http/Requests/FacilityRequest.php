<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacilityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->season ?? null;
        return [
            'image'=>'nullable|required_without:_method|image',
            'name.*'=>'required|string|min:2|max:191',
        ];
    }

    public function attributes()
    {
        return [
            'image'=>__('Image'),
            'name.ar'=>__('Name in Arabic'),
            'name.en'=>__('Name in English'),

        ];
    }
}
