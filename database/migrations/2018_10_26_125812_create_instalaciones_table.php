<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstalacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('modelo_equipo');
            $table->string('numero_serie');
            $table->string('grupo_asociado');
            $table->string('tabla_asociada');
            $table->string('datos');
            $table->string('longitud');
            $table->string('latitud');
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
        Schema::dropIfExists('instalaciones');
    }
}
