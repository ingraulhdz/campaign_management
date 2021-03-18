<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NivelesAcademicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('niveles_academicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('descripcion')->nullable(); 
            $table->boolean('activo')->default(1)->nullable(); 
            $table->softDeletes();
           $table->timestamps();
        });

           DB::table('niveles_academicos')->insert([
            'nombre' => 'Primaria',
            'descripcion' => ''
        ]);    

           DB::table('niveles_academicos')->insert([
            'nombre' => 'Secundaria',
            'descripcion' => ''
        ]);    

           DB::table('niveles_academicos')->insert([
            'nombre' => 'Preparatoria',
            'descripcion' => ''
        ]);    


           DB::table('niveles_academicos')->insert([
            'nombre' => 'Carrera Tecnica',
            'descripcion' => ''
        ]);    

           DB::table('niveles_academicos')->insert([
            'nombre' => 'Universidad',
            'descripcion' => ''
        ]);    

           DB::table('niveles_academicos')->insert([
            'nombre' => 'Maestria',
            'descripcion' => ''
        ]);    

           DB::table('niveles_academicos')->insert([
            'nombre' => 'Doctorado',
            'descripcion' => ''
        ]);    




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
