<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeederLocalidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          $path = base_path('sql/localidades/insert_localidades_15.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);

    }
}
