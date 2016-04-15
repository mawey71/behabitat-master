<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Http\Request\validarDocumento;

class UserRequest extends Request
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
        return [
            'username'       => 'required|max:255|unique:users',
            'email'          => 'required|email|max:255|unique:users',
            'password'       => 'required|confirmed|min:4',
            'nombre'         => 'required|max:60',
            'apellido1'      => 'required|max:60',
            'apellido2'      => 'sometimes|max:60',
            'rol'            => 'required',
            'nif'            => 'required_if:rol,cliente|max:9',
            'razon_social'   => 'required_if:rol,proveedor|max:60',
            'cif'            => 'required_if:rol,proveedor|max:9',
            'direccion'      => 'required|max:60',
            'localidad'      => 'required|max:60',
            'provincia'      => 'required|max:60',
            'codigo_postal'  => 'required|numeric|digits:5',
            'telefono'       => 'sometimes|numeric',
            'telefono_movil' => 'sometimes|numeric',
        ];
    }
}
