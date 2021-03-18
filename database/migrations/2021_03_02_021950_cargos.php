<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cargos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
             Schema::create('cargos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->text('descripcion')->nullable(); 
            $table->unsignedBigInteger('tipo_cargo_id');
            $table->foreign('tipo_cargo_id')->references('id')->on('tipos_cargos')->onDelete('cascade');

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
        







    }
}
