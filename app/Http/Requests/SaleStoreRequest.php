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
            'date' => 'nullable|date',
            'invoice' => 'nullable|integer',
            'name' => 'nullable|string',
            'address' => 'nullable|string',
            'reference' => 'nullable|string',
            'phone1' => 'nullable|numeric',
            'phone2' => 'nullable|numeric',
            'cpf' => 'nullable|numeric',
            'payment' => 'nullable|string',
            'sale_products' => 'nullable|string',
            'discount' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'cover' => 'nullable|file',

/*             'invoice' => 'required|integer',
            'name' => 'required|string',
            'address' => 'required|string',
            'reference' => 'nullable|string',
            'phone1' => 'required|numeric',
            'phone2' => 'nullable|numeric',
            'cpf' => 'nullable|numeric',
            'payment' => 'nullable|string',
            'sale_products' => 'required|string',
            'discount' => 'nullable|numeric',
            'total' => 'required|numeric',
            'cover' => 'nullable|file', */
        ];
    }
}
