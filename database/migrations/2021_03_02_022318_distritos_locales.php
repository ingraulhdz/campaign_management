<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DistritosLocales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('distritos_locales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('descripcion')->nullable(); 
            $table->string('clave')->nullable(); 
            $table->string('cabecera')->nullable(); 
                        $table->unsignedBigInteger('distrito_federal_id');
           $table->foreign('distrito_federal_id')->references('id')->on('distritos_federales')->onDelete('cascade');

            $table->softDeletes();

           $table->timestamps();
        });

                    DB::table('distritos_locales')->insert([
            'nombre' => 'Distrito G',
            'clave' => 'KDKA',
            'distrito_federal_id' => 2

        ]); 

            DB::table('distritos_locales')->insert([
            'nombre' => 'Distrito F',
            'clave' => 'KDKA',
            'distrito_federal_id' => 3

        ]); 

            DB::table('distritos_locales')->insert([
            'nombre' => 'Distrito E',
            'clave' => 'KDKA',
            'distrito_federal_id' => 1

        ]); 

            DB::table('distritos_locales')->insert([
            'nombre' => 'Distrito D',
            'clave' => 'KDKA',
            'distrito_federal_id' => 3

        ]); 

            DB::table('distritos_locales')->insert([
            'nombre' => 'Distrito C',
            'clave' => 'KDKA',
            'distrito_federal_id' => 2

        ]); 

            DB::table('distritos_locales')->insert([
            'nombre' => 'Distrito B',
            'clave' => 'KDKA',
            'distrito_federal_id' => 1

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
