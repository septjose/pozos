<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'contacto_empresa'=>'required',
                'nombre'=>'required',
                'apellido_materno'=>'required',
                'apellido_paterno'=>'required',
                'direccion'=>'required',
                'cp'=>'required',
                'tel'=>'required',
        ];
    }



    public function messages(): array
    {
        return [
            'contacto_empresa.required' => __('El campo contacto_empresa es obligatorio.'),
            'nombre.required' => __('El campo nombre es obligatorio.'),
            'apellido_materno.required' => __('El campo apellido_materno es obligatorio.'),
            'apellido_paterno.required' => __('El campo apellido_paterno es obligatorio.'),
            'direccion.required' => __('El campo direccion es obligatorio.'),
            'cp.required' => __('El campo cp es obligatorio.'),
            'tel.required' => __('El campo tel es obligatorio.'),

        ];
    }
}
