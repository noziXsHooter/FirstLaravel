<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleUpdateRequest extends FormRequest
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

            'invoice' => 'nullable',
            'name' => 'nullable',
            'address' => 'nullable',
            'reference' => 'nullable',
            'phone1' => 'nullable',
            'phone2' => 'nullable',
            'cpf' => 'nullable',
            'payment' => 'nullable',
            'sale_products' => 'nullable',
            'discount' => 'nullable',
            'total' => 'nullable',
            'cover' => 'nullable|file',

        ];
    }
}
