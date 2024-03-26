<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePruebaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'input1' => 'required|integer',
            'input2' => 'required|string',
            'input3' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'input1.required' => __('El campo input1 es obligatorio.'),
            'input2.required' => __('El campo input2 es obligatorio.'),
            'input3.required' => __('El campo input3 es obligatorio.'),

        ];
    }
}
