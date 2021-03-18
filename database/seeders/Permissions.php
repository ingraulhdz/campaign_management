<?php

namespace Database\Seeders;



    $this->call(RolesTableSeeder::class);
    $this->call(SeederEstados::class);
    $this->call(SeederMunicipios::class);
    $this->call(SeederLocalidades::class);


    $this->call(EstructuraPermissionsSeeder::class);
    $this->call(PersonaPermissionsSeeder::class);
    $this->call(GrupoPermissionsSeeder::class);

    $this->call(CargoPermissionsSeeder::class);