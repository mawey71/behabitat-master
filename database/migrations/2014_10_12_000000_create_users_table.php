<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('es_admin')->default(false);
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->boolean('es_empresa')->default(false);
            $table->string('nif');
            $table->string('razon_social')->nullable();
            $table->string('cif')->nullable();
            $table->string('direccion');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('codigo_postal');
            $table->string('telefono')->nullable();
            $table->string('telefono_movil')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
