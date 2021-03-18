<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Grupo;

class GrupoPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Grupo Permissions
        
        Permission::create([
        'name' => 'grupos.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View grupos table',
        'model' => 'Grupo',
        ]);
        Permission::create([
            'name' => 'grupos.edit',
            'description' => 'User can view edit form and update Grupo',
            'front_name' => 'Edit Grupo',
                    'model' => 'Grupo',

            ]);
        Permission::create([
                'name' => 'grupos.show',
                'description' => 'Can view details of each Grupo',
                'front_name' => 'View Grupo details',
                        'model' => 'Grupo',

                ]);    
        Permission::create([
                    'name' => 'grupos.create',
                    'description' => 'User can view create form and add new Grupo',
                    'front_name' => 'Create a new Grupo',
                            'model' => 'Grupo',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'grupos.delete',
                        'description' => 'User can delete a Grupo',
                        'front_name' => 'Delete Grupo',
                                'model' => 'Grupo',

                        ]);

                        Permission::create([
                            'name' => 'grupos.restore',
                            'description' => 'User can restore a Grupo',
                            'front_name' => 'Restore Grupo',
                                    'model' => 'Grupo',

                            ]);


    }
}