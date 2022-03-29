<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('equipo', function(Blueprint $table){
          $table->id();
          $table->string('nombre');
          $table->enum('tipo',['club_deportivo', 'escuela', 'otro']);
          $table->integer('num_jugadores');
          $table->integer('partidos_jugados')->nullable();
          $table->integer('partidos_ganados')->nullable();
          $table->integer('partidos_perdidos')->nullable();
          $table->integer('partidos_empatados')->nullable();
          $table->timestamps();//dos columnas para registrar fecha de creación y fecha de actualizacíon
          $table->text('descripción')->nullable();

      });  //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropDatabaseIfExists('equipo');//
    }
};
