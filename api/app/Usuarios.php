<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{

    // cuando la tabla no se llama igual, colocarla de la siguiente forma
    protected $table = "jonathan.usuarios";
    
    // para proteger que ingresen datos maliciosos desde el html por ejemplo
     protected $fillable = [
        'nombre', 'apellido', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
