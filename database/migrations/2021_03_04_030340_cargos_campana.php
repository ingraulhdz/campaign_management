<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CargosCampana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
           Schema::create('cargos_campana', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('guard_name')->nullable();
         
$table->softDeletes();

           $table->timestamps();
        });

        
                    DB::table('cargos_campana')->insert([
            'nombre' => 'Cordinador General',
            'descripcion' => 'Acceso a toda la informacion',
                        'guard_name' => 'cordinador_general'


        ]); 




                DB::table('cargos_campana')->insert([
            'nombre' => 'Cordinador Distrital',
            'descripcion' => 'Acceso a toda la informacion',
                        'guard_name' => 'cordinador_distrital'


        ]); 



        DB::table('cargos_campana')->insert([
            'nombre' => 'Cordinador Municipal',
            'descripcion' => 'Acceso a toda la informacion',
                        'guard_name' => 'cordinador_municipal'


        ]); 






            DB::table('cargos_campana')->insert([
            'nombre' => 'Staff',
            'descripcion' => 'Apoyo al cordinador de campana ',
                        'guard_name' => 'staff'


        ]); 


                  DB::table('cargos_campana')->insert([
            'nombre' => 'Responsable de comunicacion y Medios',
            'descripcion' => 'Encargado de toda la comunicacion ',
                        'guard_name' => 'marketing'


        ]); 

          DB::table('cargos_campana')->insert([
            'nombre' => 'Responsable de finanzas',
            'descripcion' => 'Encargado de las finanzas de la campana',
                        'guard_name' => 'finanzas'


        ]); 

                  DB::table('cargos_campana')->insert([
            'nombre' => 'Responsable de agenda',
            'descripcion' => 'Maneja ajenda y eventos ',
                        'guard_name' => 'agenda'


        ]); 

                  DB::table('cargos_campana')->insert([
            'nombre' => 'Validador',
            'descripcion' => 'Verificador del censo  ',
                        'guard_name' => 'verificador'


        ]); 









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
