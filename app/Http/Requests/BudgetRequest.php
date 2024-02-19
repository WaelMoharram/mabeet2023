<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BudgetRequest extends FormRequest
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
            'name.*'=>'required|string|min:2|max:191',
            'amount_from'=>'required|integer',
            'amount_to'=>'required|integer'
        ];
    }

    public function attributes()
    {
        return [


            'name.ar'=>__('Name in Arabic'),
            'name.en'=>__('Name in English'),
            'amount_from'=>__('Amount From'),
            'amount_to'=>__('Amount To'),
        ];
    }
}
