<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeederMunicipios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 
         $path = base_path('sql/insert_municipios.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);

    }
}
