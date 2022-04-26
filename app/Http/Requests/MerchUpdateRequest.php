<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MerchUpdateRequest extends FormRequest
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
            "name" => "string",
            "description" => "string",
            "image_url" => "image|mimes:jpeg,png,jpg,gif,svg",
            "price" => "integer",
            "sizes" => "array",
            "amount" => "integer"
        ];
    }
}
