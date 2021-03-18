<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AreasProfesionales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('areas_profesionales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('descripcion')->nullable(); 
            $table->boolean('activo')->nullable()->default(1); 
            $table->softDeletes();

           $table->timestamps();
        });

           DB::table('areas_profesionales')->insert([
            'nombre' => 'Ciencias Sociales',
            'descripcion' => 'Derecho, Ciencias Politicas, Sociologia, etc..'
        ]); 

     DB::table('areas_profesionales')->insert([
            'nombre' => 'Ciencias Exactas',
            'descripcion' => 'Ingenieria, Matematicas, Economia, etc..'
        ]); 


             DB::table('areas_profesionales')->insert([
            'nombre' => 'Ciencias Naturales',
            'descripcion' => 'Medicina, Biologia, Nutricion, Odontologia, etc..'
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
