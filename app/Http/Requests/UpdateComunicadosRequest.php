<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComunicadosRequest extends FormRequest
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
            'comunicado'=>'required',
                'fecha'=>'required',

        ];
    }


    public function messages(): array
    {
        return [
            'comunicado.required' => __('El campo comunicado es obligatorio.'),
            'fecha.required' => __('El campo fecha es obligatorio.'),


        ];
    }
}
