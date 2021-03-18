<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estructura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('estructura', function (Blueprint $table) {
         $table->bigIncrements('id');
        $table->string('descripcion')->nullable();  
      
          //   $table->unsignedBigInteger('persona_id');
          //  $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');

       
             $table->unsignedBigInteger('area_id')->nullable();
           $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');


   $table->unsignedBigInteger('nivel_academico_id')->nullable();
           $table->foreign('nivel_academico_id')->references('id')->on('niveles_academicos')->onDelete('cascade');

             $table->string('actividad_actual');
          //  $table->foreign('actividad_actual_id')->references('id')->on('actividades_actuales')->onDelete('cascade');
           //$table->foreign('actividad_actual_id')->references('id')->on('actividades_actuales')->onDelete('cascade');

                       $table->string('curriculum')->nullable();  
                       $table->string('foto')->nullable();  

  
            $table->text('observacion')->nullable();  
            $table->boolean('activo')->nullable();  
    $table->foreignId('grupo_id')->nullable()->constrained('grupos')->onUpdate('cascade')->onDelete('cascade');;

             $table->unsignedBigInteger('secciones_asignadas')->nullable();
             $table->unsignedBigInteger('distritos_locales_asignados')->nullable();
             $table->unsignedBigInteger('distritos_federales_asignados')->nullable();
          // $table->foreign('secciones_asignadas')->references('id')->on('secciones_asignadas')->onDelete('cascade');


              $table->unsignedBigInteger('seccion_asignado')->nullable();
           $table->foreign('seccion_asignado')->references('id')->on('secciones')->onDelete('cascade');

           
            $table->unsignedBigInteger('distrito_local_asignado')->nullable();
           $table->foreign('distrito_local_asignado')->references('id')->on('distritos_locales')->onDelete('cascade');

           
            $table->unsignedBigInteger('distrito_federal_asignado')->nullable();
           $table->foreign('distrito_federal_asignado')->references('id')->on('distritos_federales')->onDelete('cascade');

$table->foreignId('cargo_campana_id')->constrained('cargos_campana')->nullable();;

            $table->string('nombre'); 
            $table->string('apellido_materno'); 
            $table->string('apellido_paterno')->nullable(); 
            $table->string('numero_exterior')->nullable(); 
            $table->string('numero_interior')->nullable(); 
            $table->string('calle')->nullable(); 
                        $table->date('fecha_nacimiento')->nullable(); 


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
            $table->string('email')->nullable()->unique(); 
            $table->string('email2')->nullable(); 
            $table->string('curp')->nullable()->unique(); 
            $table->string('clave_electoral')->nullable()->unique(); 
            $table->string('facebook')->nullable(); 
            $table->string('twitter')->nullable(); 
            $table->string('instagram')->nullable(); 
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
