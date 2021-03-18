<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Secciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('secciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('descripcion')->nullable(); 
            $table->string('clave')->nullable(); 
            $table->unsignedBigInteger('distrito_local_id');
$table->foreign('distrito_local_id')->references('id')->on('distritos_locales')->onDelete('cascade');

            $table->softDeletes();

           $table->timestamps();
        });

                  DB::table('secciones')->insert([
            'nombre' => 'Seccion 0008',
            'clave' => 'KDKA',
            'distrito_local_id' => 2

        ]); 

                    DB::table('secciones')->insert([
            'nombre' => 'Seccion 0328',
            'clave' => 'KDKA',
            'distrito_local_id' => 3

        ]); 

                    DB::table('secciones')->insert([
            'nombre' => 'Seccion 5608',
            'clave' => 'KDKA',
            'distrito_local_id' => 3

        ]); 

                    DB::table('secciones')->insert([
            'nombre' => 'Seccion 4508',
            'clave' => 'KDKA',
            'distrito_local_id' => 1

        ]); 


                    DB::table('secciones')->insert([
            'nombre' => 'Seccion 0045',
            'clave' => 'KDKA',
            'distrito_local_id' => 1

        ]); 

                    DB::table('secciones')->insert([
            'nombre' => 'Seccion 0023',
            'clave' => 'KDKA',
            'distrito_local_id' => 4

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
