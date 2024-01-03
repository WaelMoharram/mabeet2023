<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitRequest extends FormRequest
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
            'name'=>'required|string|min:2|max:191',
            'user_id'=>'required|integer',
            'city_id'=>'required|integer',
            'description'=>'required|string|min:2|max:191',
            'amount'=>'required|integer',
            'lng'=>'required|numeric',
            'lat'=>'required|numeric',
            'unit_type_id'=>'required|integer',
            'image1'=>'nullable|required_without:_method|image',
            'image2'=>'nullable|image',
            'image3'=>'nullable|image',
            'image4'=>'nullable|image',
            'image5'=>'nullable|image',
            'image6'=>'nullable|image',
            'image7'=>'nullable|image',
            'status'=>'required|boolean',


        ];
    }

    public function attributes()
    {
        return [


            'name.ar'=>__('Name in Arabic'),
            'name.en'=>__('Name in English'),

        ];
    }
}
