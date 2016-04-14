<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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
        return Validator::make($data, [
            'username'      => 'required|max:255|unique:users',
            'email'         => 'required|email|max:255|unique:users',
            'password'      => 'required|confirmed|min:4',
            'nombre'        => 'required|max:60',
            'apellido1'     => 'required|max:60',
            'es_empresa'    => 'boolean',
            'nif'           => 'required_if:es_empresa,false|max:9',
            'razon_social'  => 'required_if:es_empresa,true|max:60',
            'cif'           => 'required_if:es_empresa,true|max:9',
            'direccion'     => 'required|max:60',
            'localidad'     => 'required|max:60',
            'provincia'     => 'required|max:60',
            'codigo_postal' => 'required|numeric|max:5',
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
            'es_empresa'     => $data['es_empresa'],
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
