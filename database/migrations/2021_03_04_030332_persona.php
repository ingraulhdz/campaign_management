<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
                 Schema::create('personas', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('apellido_materno'); 
            $table->string('apellido_paterno')->nullable(); 
            $table->string('numero_exterior')->nullable(); 
            $table->string('numero_interior')->nullable(); 
            $table->string('calle')->nullable(); 

            $table->unsignedBigInteger('localidad_id');
           $table->foreign('localidad_id')->references('id')->on('localidades')->onDelete('cascade');

            $table->unsignedBigInteger('municipio_id');
           $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');

            $table->unsignedBigInteger('estado_id');
           $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');

           
            $table->unsignedBigInteger('seccion_id');
           $table->foreign('seccion_id')->references('id')->on('secciones')->onDelete('cascade');

           
            $table->unsignedBigInteger('distrito_local_id');
           $table->foreign('distrito_local_id')->references('id')->on('distritos_locales')->onDelete('cascade');

           
            $table->unsignedBigInteger('distrito_federal_id');
           $table->foreign('distrito_federal_id')->references('id')->on('distritos_federales')->onDelete('cascade');


            $table->string('telefono_celular')->nullable(); 
            $table->string('telefono_casa')->nullable(); 
            $table->string('telefono_trabajo')->nullable(); 
            $table->string('email')->nullable(); 
            $table->date('fecha_nacimiento'); 
            $table->string('email2')->nullable(); 
            $table->string('actividad_actual')->nullable(); 
            $table->string('foto')->nullable(); 
            $table->string('curp')->nullable(); 
            $table->string('curriculum')->nullable(); 
            $table->string('clave_electoral')->nullable(); 
            $table->string('facebook')->nullable(); 
            $table->string('twitter')->nullable(); 
            $table->string('instagram')->nullable(); 


            
   $table->unsignedBigInteger('nivel_academico_id')->nullable();
           $table->foreign('nivel_academico_id')->references('id')->on('niveles_academicos')->onDelete('cascade');


          $table->foreignId('area_profesional_id')->nullable()->constrained('areas_profesionales');

            
            $table->unsignedBigInteger('usuario_crea_id')->nullable();
           $table->foreign('usuario_crea_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('usuario_modifica_id')->nullable();
           $table->foreign('usuario_modifica_id')->references('id')->on('users')->onDelete('cascade');


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
