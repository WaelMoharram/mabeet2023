<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        $id = $this->admin ?? null;
        return [
            'image'=>'nullable|required_without:_method|image',
            'name'=>'required|string|min:2|max:191',
            'email' => 'required|email|unique:admins,email,' . $id . ',id,deleted_at,NULL',
            'phone' => 'required|unique:admins,phone,' . $id . ',id,deleted_at,NULL',
            'password' => 'nullable|required_without:_method|confirmed',
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
