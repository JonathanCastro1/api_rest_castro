<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// agregamos el namespace del modelo para poder usar los metodos etc
use App\Usuarios;
use DB;

class LoginController extends Controller
{
    //

	public function logearse(Request $request)
    {        
       
        $usuario=$request->input('usuario');
        $password=$request->input('password');

        $usuarios = DB::table('jonathan.usuarios')
        ->where('usuario', $usuario)
        ->where('password', $password)
        ->first();      
       

        return response()
            ->json(['data' => $usuarios]);       



    }

}
