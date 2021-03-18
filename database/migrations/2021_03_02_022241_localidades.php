<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Localidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('localidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('descripcion')->nullable(); 
           $table->foreignId('municipio_id')->constrained('municipios')->onDelete('cascade');
            $table->string('clave')->nullable(); 
            $table->integer('mapa')->nullable(); 
            $table->string('ambito')->nullable(); 
            $table->string('latitud')->nullable(); 
            $table->string('longitud')->nullable(); 
            $table->double('lat', 10, 7);        
            $table->double('lng', 10, 7);        
            $table->string('altitud')->nullable(); 
            $table->string('carta')->nullable(); 
            $table->integer('poblacion')->nullable(); 
            $table->integer('masculino')->nullable(); 
            $table->integer('femenino')->nullable(); 
            $table->integer('viviendas')->nullable(); 
            $table->boolean('activo')->nullable(); 

            $table->softDeletes();

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
        //
    }
}
