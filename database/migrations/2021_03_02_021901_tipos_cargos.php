<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TiposCargos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('tipos_cargos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('descripcion')->nullable(); 
                                   $table->boolean('activo')->default(1)->nullable(); ; 

            $table->softDeletes();
           $table->timestamps();
        });


           DB::table('tipos_cargos')->insert([
            'nombre' => 'Administracion Publica',
            'descripcion' => 'Cargos en la administracion publica'
        ]);    


            DB::table('tipos_cargos')->insert([
            'nombre' => 'Iniciativa Privada',
            'descripcion' => 'Cargo en la iniciativa privada '
        ]);    


            DB::table('tipos_cargos')->insert([
            'nombre' => 'Politica',
            'descripcion' => 'Cargos dentro de un partido politico'
        ]);    

            DB::table('tipos_cargos')->insert([
            'nombre' => 'Eleccion Popular',
            'descripcion' => 'Cargos por eleccion popular mediante voto'
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
