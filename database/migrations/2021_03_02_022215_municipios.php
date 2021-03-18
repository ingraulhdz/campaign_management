<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Municipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('clave')->nullable(); 
            $table->string('descripcion')->nullable(); 
                        $table->unsignedBigInteger('estado_id');
           $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
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
