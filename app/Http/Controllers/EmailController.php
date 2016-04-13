<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\EmailRequest;
use App\Http\Controllers\Controller;
use Mail;

class EmailController extends Controller
{
    public function mostrarForm()
    {
        return view('emails.formContacto');
    }

    public function enviarEmail(EmailRequest $request) {
    	$data = [
    		'nombre'   => $request->input('nombre'),
    		'email'    => $request->input('email'), 
    		'telefono' => $request->input('telefono'),
    		'mensaje'  => $request->input('mensaje')
    	];
    	$fromEmail = 'contacto@behabitat.com';
    	$fromNombre = 'Robot contacto@behabitat';

    	Mail::send('emails.email', $data, function($mensaje) use($fromEmail, $fromNombre) {
    		$mensaje->from($fromEmail, $fromNombre);
    		$mensaje->to('administracion@behabitat.com');
            $mensaje->cc('neoproyecto@gmail.com');
    		$mensaje->subject('Email recibido desde beHABITAT');
    	});
    	flash()->success('Hemos recibido tu correo. Nos pondremos en contacto contigo lo antes posible', 'Mensaje enviado con éxito');
    	return back();
        
    }
}
