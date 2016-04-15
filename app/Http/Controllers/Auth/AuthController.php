<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
include(app_path().'/includes/validarDocumento.php');

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        Validator::extend('nif_valido', function($attribute, $value, $parameters) {   
            return (isValidNIF($value) || isValidNIE($value));
        });

        Validator::extend('cif_valido', function($attribute, $value, $parameters) {   
            return isValidCIF($value);
        });
        
        return Validator::make($data, [
            'username'       => 'required|max:255|unique:users',
            'email'          => 'required|email|max:255|unique:users',
            'password'       => 'required|confirmed|min:4',
            'nombre'         => 'required|max:60',
            'apellido1'      => 'required|max:60',
            'apellido2'      => 'sometimes|max:60',
            'rol'            => 'required',
            'nif'            => 'nif_valido|required_if:rol,cliente|max:9',
            'razon_social'   => 'required_if:rol,proveedor|max:60',
            'cif'            => 'cif_valido|required_if:rol,proveedor|max:9',
            'direccion'      => 'required|max:60',
            'localidad'      => 'required|max:60',
            'provincia'      => 'required|max:60',
            'codigo_postal'  => 'required|numeric|digits:5',
            'telefono'       => 'sometimes|numeric',
            'telefono_movil' => 'sometimes|numeric',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username'       => $data['username'],
            'email'          => $data['email'],
            'password'       => bcrypt($data['password']),
            'es_admin'       => false,
            'nombre'         => $data['nombre'],
            'apellido1'      => $data['apellido1'], 
            'apellido2'      => $data['apellido2'], 
            'nif'            => $data['nif'],
            'rol'            => $data['rol'],
            'razon_social'   => $data['razon_social'],
            'cif'            => $data['cif'],
            'direccion'      => $data['direccion'],
            'localidad'      => $data['localidad'],
            'provincia'      => $data['provincia'],
            'codigo_postal'  => $data['codigo_postal'],
            'telefono'       => $data['telefono'],
            'telefono_movil' => $data['telefono_movil']
        ]);
    }
}
