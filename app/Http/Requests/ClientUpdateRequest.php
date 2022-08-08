<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
                'name' => 'nullable|string',
                'address' => 'nullable|string',
                'reference' => 'nullable|string',
                'phone1' => 'nullable|numeric',
                'phone2' => 'nullable|numeric',
                'cpf' => 'nullable|numeric',
                'identity' => 'nullable|numeric',
                'email' => 'nullable|string',
                /* 'points' => 'nullable|numeric', */
                'distance' => 'nullable|numeric',
                'age' => 'nullable|numeric',
                'total' => 'nullable|numeric',
                'rating' => 'nullable|numeric',
                'cover' => 'nullable|file',
               /*  'born_in' => 'nullable|datetime', */
            ];
    }
}
