<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class brand_store_rules extends FormRequest
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
            'title'=>['required'],
            'img'=>['required','mimes:png,jpg,jpeg,gif','max:1024','min:5']
        ];
    }
}
