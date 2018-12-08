<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //esto es con php artisan migrate
    {
        Schema::create('jonathan.usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();           
            $table->string('password');
            $table->string('role');            
            $table->timestamps();      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  //esto es con php artisan migrate:rollback
    {
        Schema::dropIfExists('jonathan.usuarios');
    }
}
