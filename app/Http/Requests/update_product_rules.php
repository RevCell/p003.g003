<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class update_product_rules extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title"=>['required'],
            "category_id"=>['required','exists:categories,id'],
            "brand_id"=>['required','exists:brands,id'],
            "price"=>['required'],
            "slug"=>['required',"alpha_dash"],
            "img01"=>['nullable','max:1024',"mimes:png,jpg,jpeg"],
            "img02"=>['nullable','max:1024',"mimes:png,jpg,jpeg"],
            "description"=>['required']
        ];
    }
}
