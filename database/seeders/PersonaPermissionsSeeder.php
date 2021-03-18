<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Persona;

class PersonaPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //Persona Permissions
        
        Permission::create([
        'name' => 'personas.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View personas table',
        'model' => 'Persona',
        ]);
        Permission::create([
            'name' => 'personas.edit',
            'description' => 'User can view edit form and update Persona',
            'front_name' => 'Edit Persona',
                    'model' => 'Persona',

            ]);
        Permission::create([
                'name' => 'personas.show',
                'description' => 'Can view details of each Persona',
                'front_name' => 'View Persona details',
                        'model' => 'Persona',

                ]);    
        Permission::create([
                    'name' => 'personas.create',
                    'description' => 'User can view create form and add new Persona',
                    'front_name' => 'Create a new Persona',
                            'model' => 'Persona',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'personas.delete',
                        'description' => 'User can delete a Persona',
                        'front_name' => 'Delete Persona',
                                'model' => 'Persona',

                        ]);

                        Permission::create([
                            'name' => 'personas.restore',
                            'description' => 'User can restore a Persona',
                            'front_name' => 'Restore Persona',
                                    'model' => 'Persona',

                            ]);


    }
}