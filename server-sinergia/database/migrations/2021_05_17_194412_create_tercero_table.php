<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerceroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tercero', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_identificacion_id');
            $table->bigInteger('numero_identificacion');
            $table->string('tipo_tercero_id');
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('departamento_id');
            $table->string('idmunicipio_id');
            $table->string('tipo_contribuyente_id');
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
        Schema::dropIfExists('tercero');
    }
}
