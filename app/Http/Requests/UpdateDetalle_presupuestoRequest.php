<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDetalle_presupuestoRequest extends FormRequest
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
            'id_presupuesto'=>'required',
                'cantidad'=>'required',
                'unidad'=>'required',
                'descripcion'=>'required',
                'precio_unitario'=>'required',
                'importe'=>'required',
                'observacion'=>'required',
        ];
    }



    public function messages(): array
    {
        return [
            'id_presupuesto.required' => __('El campo id_presupuesto es obligatorio.'),
            'cantidad.required' => __('El campo cantidad es obligatorio.'),
            'unidad.required' => __('El campo unidad es obligatorio.'),
            'descripcion.required' => __('El campo descripcion es obligatorio.'),
            'precio_unitario.required' => __('El campo precio_unitario es obligatorio.'),
            'importe.required' => __('El campo importe es obligatorio.'),
            'observacion.required' => __('El campo observacion es obligatorio.'),

        ];
    }
}
