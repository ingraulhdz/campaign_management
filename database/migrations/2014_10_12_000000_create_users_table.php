<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //$table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();

            $table->timestamps();
        });
        DB::table('users')->insert([
            'email' => 'raulhernandezing@gmail.com',
            //'username' => 'ingraulhdz',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            //'remember_token' => str_random(10),
            'name' => 'Raul Hernandez',
    
    
            ]);

            DB::table('users')->insert([
                'email' => 'kassie@gmail.com',
                //'username' => 'ingraulhdz',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                //'remember_token' => str_random(10),
                'name' => 'Kassie Flores',
        
        
                ]);

  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
