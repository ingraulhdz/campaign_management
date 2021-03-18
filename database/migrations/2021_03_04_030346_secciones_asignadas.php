<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeccionesAsignadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
             Schema::create('secciones_asignadas', function (Blueprint $table) {
            $table->bigIncrements('id');
         
$table->foreignId('estructura_id')->constrained('estructura');
$table->foreignId('seccion_id')->constrained('secciones')->onUpdate('cascade')->onDelete('cascade');

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
