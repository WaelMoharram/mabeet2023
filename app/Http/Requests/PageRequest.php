<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
        return [
            'image'=>'nullable|required_without:_method|image',
            'title.*'=>'required|string|min:2|max:191',
            'content.*'=>'required',
        ];
    }

    public function attributes()
    {
        return [
            'image'=>__('Image'),

            'title.ar'=>__('Title in Arabic'),
            'title.en'=>__('Title in English'),

            'content.ar'=>__('Content in Arabic'),
            'content.en'=>__('Content in English'),
        ];
    }
}
