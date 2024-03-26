<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBitacoraRequest extends FormRequest
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
            'fecha'=>'required',
            'hora'=>'required',
            'rpm_bomba'=>'required',
            'piezometro_pulgada'=>'required',
            'gasto_lps'=>'required',
            'nivel_dinamico'=>'required',
            'observaciones'=>'required',
        ];
    }

    public function messages(): array
    {
        return [
            'fecha.required' => __('El campo fecha es obligatorio.'),
            'hora.required' => __('El campo hora es obligatorio.'),
            'rpm_bomba.required' => __('El campo rpm_bomba es obligatorio.'),
            'piezometro_pulgada.required' => __('El campo piezometro_pulgada es obligatorio.'),
            'gasto_lps.required' => __('El campo gasto_lps es obligatorio.'),
            'nivel_dinamico.required' => __('El campo nivel_dinamico es obligatorio.'),
            'observaciones.required' => __('El campo observaciones es obligatorio.'),

        ];
    }
}
