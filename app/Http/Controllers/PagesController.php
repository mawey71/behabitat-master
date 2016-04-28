<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
	public function __construct()
	{
        //$this->middleware('auth');
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
    	return view('home');
    }

    public function about()
    {
    	return view('about');
    }

    public function perfil() {
        return 'PERFIL de ' . Auth::user()->username;
    }
}
