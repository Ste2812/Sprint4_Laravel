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
       Schema::create('partido', function(Blueprint $table){
           $table->id();
           $table->dateTime('fecha');
           $table->timestamps();
           $table->string('lugar');
           $table->integer('id_equipo_A');
           $table->integer('id_equipo_B');
           $table->text('comentarios')->nullable();

       }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropDatabaseIfExists('partido'); //
    }
};
