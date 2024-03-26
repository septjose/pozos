<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePresupuestoRequest extends FormRequest
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
            'id_cliente'=>'required',
                'fecha'=>'required',
                'numero'=>'required',
                'subtotal'=>'required',
                'iva'=>'required',
                'total'=>'required',

        ];
    }



    public function messages(): array
    {
        return [
            'id_cliente.required' => __('El campo id_cliente es obligatorio.'),
            'fecha.required' => __('El campo fecha es obligatorio.'),
            'numero.required' => __('El campo numero es obligatorio.'),
            'subtotal.required' => __('El campo subtotal es obligatorio.'),
            'iva.required' => __('El campo iva es obligatorio.'),
            'total.required' => __('El campo total es obligatorio.'),


        ];
    }

}
