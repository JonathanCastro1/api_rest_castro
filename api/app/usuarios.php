<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    //

     protected $fillable = [
        'email', 'password', 'role',
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
