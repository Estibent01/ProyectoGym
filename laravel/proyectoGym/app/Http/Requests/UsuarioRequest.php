<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Usuario extends FormRequest
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
            if ($this->method() == 'PUT')
            {
            return [
                'nombre '                         =>'required',
                'no_documento'                  => 'required|no_docuemento|unique:users,no_docuemnto,'.$this->id,
                'email'                       =>  'required|email|unique:users,email,'.$this->id,
                'imagen_usuario'                     => 'required',
                'rol'                           => 'required',
                'id_horario'                 => 'required',
                'password'                 => 'required',
            ];
            
          }else{
            return [
                'nombre '                         =>'required',
                'no_documento'                  => 'required|no_docuemento|unique:users,no_docuemnto,'.$this->id,
                'email'                       =>  'required|email|unique:users',
                'imagen_usuario'                     => 'required',
                'rol'                           => 'required',
                'id_horario'                 => 'required',
                'password'                 => 'required',
                      ];
         }
    }
}

