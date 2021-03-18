<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DistritosLocalesAsignados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('distritos_locales_asignados', function (Blueprint $table) {
            $table->bigIncrements('id');
         
$table->foreignId('estructura_id')->constrained('estructura');
$table->foreignId('distrito_local_id')->constrained('distritos_locales')->onUpdate('cascade')->onDelete('cascade');

$table->softDeletes();

           $table->timestamps();
        });

        //
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
