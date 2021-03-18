<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Grupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
          Schema::create('grupos', function (Blueprint $table) {
               $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('descripcion')->nullable(); 
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
