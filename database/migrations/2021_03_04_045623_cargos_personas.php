<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CargosPersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('cargos_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
         
$table->foreignId('estructura_id')->constrained('estructura');
$table->foreignId('cargo_id')->constrained('cargos')->onUpdate('cascade')->onDelete('cascade');

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
