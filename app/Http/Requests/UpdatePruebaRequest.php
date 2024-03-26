<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePruebaRequest extends FormRequest
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
            'id_prueba'=>'required|integer',
            'input1' => 'required|integer',
            'input2' => 'required|string',
            'input3' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'id_prueba.required' => __('El campo id_prueba es obligatorio.'),
            'input1.required' => __('El campo input1 es obligatorio.'),
            'input2.required' => __('El campo input2 es obligatorio.'),
            'input3.required' => __('El campo input3 es obligatorio.'),

        ];
    }
}
