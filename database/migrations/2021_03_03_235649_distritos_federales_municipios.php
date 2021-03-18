<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DistritosFederalesMunicipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
                 Schema::create('distritos_federales_municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('distrito_federal_id');
         $table->unsignedBigInteger('municipio_id');
$table->foreign('distrito_federal_id')->references('id')->on('distritos_federales')->onDelete('cascade');
$table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');

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
