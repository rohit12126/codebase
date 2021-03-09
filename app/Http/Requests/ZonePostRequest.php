<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZonePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'product_price'=> 'required|numeric|min:0|not_in:0',
            'hardware.*.min_weight' => 'required|integer',
            'hardware.*.max_weight' => 'required|integer',
            'hardware.*.price'    => 'required|not_in:0',
            'states'=>'required'
        ];
    }
}
