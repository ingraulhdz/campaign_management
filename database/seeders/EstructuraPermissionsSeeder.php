<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Estructura;

class EstructuraPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Estructura Permissions
        
        Permission::create([
        'name' => 'estructuras.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View estructuras table',
        'model' => 'Estructura',
        ]);
        Permission::create([
            'name' => 'estructuras.edit',
            'description' => 'User can view edit form and update Estructura',
            'front_name' => 'Edit Estructura',
                    'model' => 'Estructura',

            ]);
        Permission::create([
                'name' => 'estructuras.show',
                'description' => 'Can view details of each Estructura',
                'front_name' => 'View Estructura details',
                        'model' => 'Estructura',

                ]);    
        Permission::create([
                    'name' => 'estructuras.create',
                    'description' => 'User can view create form and add new Estructura',
                    'front_name' => 'Create a new Estructura',
                            'model' => 'Estructura',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'estructuras.delete',
                        'description' => 'User can delete a Estructura',
                        'front_name' => 'Delete Estructura',
                                'model' => 'Estructura',

                        ]);

                        Permission::create([
                            'name' => 'estructuras.restore',
                            'description' => 'User can restore a Estructura',
                            'front_name' => 'Restore Estructura',
                                    'model' => 'Estructura',

                            ]);


    }
}