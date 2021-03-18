<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Cargo;

class CargoPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Cargo Permissions
        
        Permission::create([
        'name' => 'cargos.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View cargos table',
        'model' => 'Cargo',
        ]);
        Permission::create([
            'name' => 'cargos.edit',
            'description' => 'User can view edit form and update Cargo',
            'front_name' => 'Edit Cargo',
                    'model' => 'Cargo',

            ]);
        Permission::create([
                'name' => 'cargos.show',
                'description' => 'Can view details of each Cargo',
                'front_name' => 'View Cargo details',
                        'model' => 'Cargo',

                ]);    
        Permission::create([
                    'name' => 'cargos.create',
                    'description' => 'User can view create form and add new Cargo',
                    'front_name' => 'Create a new Cargo',
                            'model' => 'Cargo',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'cargos.delete',
                        'description' => 'User can delete a Cargo',
                        'front_name' => 'Delete Cargo',
                                'model' => 'Cargo',

                        ]);

                        Permission::create([
                            'name' => 'cargos.restore',
                            'description' => 'User can restore a Cargo',
                            'front_name' => 'Restore Cargo',
                                    'model' => 'Cargo',

                            ]);


    }
}