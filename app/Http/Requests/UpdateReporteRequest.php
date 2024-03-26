<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReporteRequest extends FormRequest
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
            'id_pozo'=>'required',
                'nota'=>'required',
                'conclusion'=>'required',
                'fecha_inicio'=>'required',
                'fecha_fin'=>'required',

        ];
    }


    public function messages(): array
    {
        return [
            'id_pozo.required' => __('El campo id_pozo es obligatorio.'),
            'nota.required' => __('El campo nota es obligatorio.'),
            'conclusion.required' => __('El campo conclusion es obligatorio.'),
            'fecha_inicio.required' => __('El campo fecha_inicio es obligatorio.'),
            'fecha_fin.required' => __('El campo fecha_fin es obligatorio.'),


        ];
    }
}
