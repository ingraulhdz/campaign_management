<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Areas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre'); 
            $table->string('descripcion')->nullable(); 
                                   $table->boolean('activo')->default(1)->nullable(); ; 

            $table->softDeletes();

           $table->timestamps();
        });

             DB::table('areas')->insert([
            'nombre' => 'Area 1',
            'descripcion' => 'descripcion area'
        ]);    


          DB::table('areas')->insert([
            'nombre' => 'Area 2',
            'descripcion' => 'descripcion area'
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
