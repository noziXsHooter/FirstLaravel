<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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

            'product_id' => 'nullable|integer',
            'name' => 'required|string',
            'color' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'provider' => 'nullable|string',
            'cover' => 'nullable|file',
            'description' => 'nullable|string',

        ];
    }
}
