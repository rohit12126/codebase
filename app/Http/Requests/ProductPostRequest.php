<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPostRequest extends FormRequest
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
            'image' => 'required|array|max:5',
            'image.*' => 'mimes:jpeg,jpg,png|max:4000',
            'description' => 'required',
            'sale_price'=> 'required|numeric|min:0|not_in:0',
            'sku'=> 'required|max:20|min:2|unique:products'
        ];
    }
}
