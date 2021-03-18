<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DistritosFederales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('distritos_federales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('clave'); 
            $table->string('cabecera')->nullable(); 
            $table->string('descripcion')->nullable(); 

          

            $table->softDeletes();

           $table->timestamps();
        });

             DB::table('distritos_federales')->insert([
            'nombre' => 'Distrito I',
            'clave' => 'CKSD'
        ]); 


                    DB::table('distritos_federales')->insert([
            'nombre' => 'Distrito II',
            'clave' => 'CKSD'
        ]); 


                    DB::table('distritos_federales')->insert([
            'nombre' => 'Distrito III',
            'clave' => 'CKSD'
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
