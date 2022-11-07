<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('statusReferido');
            $table->string('cedulaReferido')->nullable();
            $table->string('cedula');
            $table->string('nombre');
            $table->date('fechaNacimiento');
            $table->integer('estadoCivil');
            $table->integer('viveQuito');
            $table->string('ciudadResidencia');
            $table->string('calleP');
            $table->string('calleS');
            $table->string('numCasa');
            $table->string('numCelular');
            $table->string('mail');
            $table->integer('sitLaboral');
            $table->string('nombreEmpresa')->nullable();
            $table->integer('montoMensual');
            $table->string('urlTicket');
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
        Schema::dropIfExists('registro');
    }
}
