<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// agregamos el namespace del modelo para poder usar los metodos etc
use App\Usuarios;
use DB;

class UsuariosController extends Controller
{
    //

	public function index()
	{

	}



	public function getUsers()
	{        


		$usuarios = DB::table('jonathan.usuarios')
		->get();


        return response()
            ->json(['data' => $usuarios]);
            

	}

}
