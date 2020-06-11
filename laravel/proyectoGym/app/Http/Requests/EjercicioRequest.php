<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EjercicioRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        if ($this->method('put')) {
            return [
                'categoria'                         =>'required',
                'nombre_ejercicio'                  => 'required|nombre_ejercicio|unique:ejercicios,nombre_ejercicio,'.$this->id,
                'descripcion'                       => 'required',
                'numero_series'                     => 'required',
                'tiempo_ejercicio'                 => 'required',
                'musculo_ejercicio'                 => 'required',
                'imagen'                            => 'max:1000',            
                'maquina_ejercicio'                 => '',            
                      ];
          }else{
            return [
                'categoria'                         => 'required|min:4',
                'nombre_ejercicio'                  => 'required|nombre_ejercicio|unique:ejercicios',
                'descripcion'                       => 'required',
                'numero_series'                     => 'required',
                'tiempo_ejercicio'                 => 'required',
                'musculo_ejercicio'                 => 'required',
                'imagen'                            => 'required|image|max:1000',
                'maquina_ejercicio'                 => ''            
                
                      ];
          }
    }
}
