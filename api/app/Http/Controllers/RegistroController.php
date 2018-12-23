<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// para usar el modelo orm
use App\Usuarios;

// para sar query builder
use DB;



class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
       
       // query builder forma

    //    DB::table('jonathan.usuarios')->insert([
    //     'id' => null,
    //     'nombre' => $request->input('nombre'),
    //     'apellido' => $request->input('apellido'),
    //     'email' => $request->input('email'),
    //     'password' => md5($request->input('password')),
    //     'fecha' => $request->input('fecha'),
    //     'role' => $request->input('role') 
    // ]);

       // forma con eloquent orm

        $usuarios = new Usuarios;     
        

        $usuarios->nombre = $request->input('nombre');
        $usuarios->apellido = $request->input('apellido');
        $usuarios->email = $request->input('email');
        $usuarios->password = md5($request->input('password'));      
        $usuarios->role = $request->input('role');

        $usuarios->save();

       return response("Registro Exitoso", 200);

       // otra forma
       // return response()->json($usuarios);

   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
