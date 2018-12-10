<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correlativo');
            $table->string('responsable');
            $table->string('fecha_solicitud');
            $table->string('solicitante');
            $table->mediumText('asunto');
            $table->mediumText('cuerpo');
            $table->mediumText('anotaciones');
            $table->enum('estado', ['asignado', 'cerrado', 'porCerrar']);
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
        Schema::dropIfExists('casos');
    }
}
