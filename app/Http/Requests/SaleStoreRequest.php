<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleStoreRequest extends FormRequest
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

            'invoice' => 'required|integer',
            'name' => 'required|string',
            'address' => 'required|string',
            'reference' => 'nullable|string',
            'phone1' => 'nullable|string',
            'phone2' => 'nullable|string',
            'cpf' => 'nullable|string',
            'payment' => 'required|string',
            'sale_products' => 'nullable|string',
            'discount' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'cover' => 'nullable|string',

        ];
    }
}
