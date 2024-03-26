<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePozoRequest extends FormRequest
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
            'id_cliente'=>'required',
                'localizacion_pozo'=>'required',
                'municipio'=>'required',
                'ciudad'=>'required',
                'direccion'=>'required',
                'motor'=>'required',
                'diametro_bomba'=>'required',
                'longitd_columna'=>'required',
                'profundidad_pozo'=>'required',
                'tipo_bomba'=>'required',
                'no_pasos'=>'required',
                'diametro_ademe'=>'required',
                'nivel_estatico'=>'required',
                'temperatura_agua'=>'required',
                'orificio_utilizado'=>'required',

        ];
    }



    public function messages(): array
    {
        return [
            'id_cliente.required' => __('El campo id_cliente es obligatorio.'),
            'localizacion_pozo.required' => __('El campo localizacion_pozo es obligatorio.'),
            'municipio.required' => __('El campo municipio es obligatorio.'),
            'ciudad.required' => __('El campo ciudad es obligatorio.'),
            'direccion.required' => __('El campo direccion es obligatorio.'),
            'motor.required' => __('El campo motor es obligatorio.'),
            'diametro_bomba.required' => __('El campo diametro_bomba es obligatorio.'),
            'longitd_columna.required' => __('El campo longitd_columna es obligatorio.'),
            'profundidad_pozo.required' => __('El campo profundidad_pozo es obligatorio.'),
            'tipo_bomba.required' => __('El campo tipo_bomba es obligatorio.'),
            'no_pasos.required' => __('El campo no_pasos es obligatorio.'),
            'diametro_ademe.required' => __('El campo diametro_ademe es obligatorio.'),
            'temperatura_agua.required' => __('El campo temperatura_agua es obligatorio.'),
            'orificio_utilizado.required' => __('El campo tel es obligatorio.'),
          


        ];
    }
}
