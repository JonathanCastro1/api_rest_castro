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


		// $usuarios = DB::table('jonathan.usuarios')
		// ->get();

		$usuarios = Usuarios::all();


        return response()
            ->json(['data' => $usuarios]);


			// otra forma
             // return response()->json($usuarios);
            

	}

	// public function destroy(Request $request ,$id)
	public function destroy($id)
    {       
     
       $usuarios = Usuarios::where('id', $id)->delete();

    	
       return response("Eliminado correctamente", 200);

    }

    

   public function update(Request $request, $id)
    {
         $usuarios = Usuarios::findOrFail($id);

         $usuarios->update($request->all());


        return response()
            ->json(['data' => $usuarios]);
    }


    public function show($id)
    {

    	// $usuarios = Usuarios::find($id);

    	// findOrFail nos da un error mas especifico al no encontrar registros,
    	// como un codigo 404 por ejemplo
    	$usuarios = Usuarios::findOrFail($id);


        return response()
            ->json(['data' => $usuarios]);
        
    }


     public function edit($id)
    {

        $usuarios = Usuarios::findOrFail($id);


        return response()
            ->json(['data' => $usuarios]);
    }



}
