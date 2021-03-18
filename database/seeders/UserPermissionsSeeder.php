<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  

        //User Permissions
        
        Permission::create([
        'name' => 'users.index',
        'description' => 'User can view main table with some details',
        'front_name' => 'View users table',
        'model' => ' User ',
        ]);
        Permission::create([
            'name' => 'users.edit',
            'description' => 'User can view edit form and update User',
            'front_name' => 'Edit User',
                    'model' => ' User ',

            ]);
        Permission::create([
                'name' => 'users.show',
                'description' => 'Can view details of each User',
                'front_name' => 'View User details',
                        'model' => ' User ',

                ]);    
        Permission::create([
                    'name' => 'users.create',
                    'description' => 'User can view create form and add new User',
                    'front_name' => 'Create a new User',
                            'model' => ' User ',

                    ]);      
                    
        

                                Permission::create([
                        'name' => 'users.delete',
                        'description' => 'User can delete a User',
                        'front_name' => 'Delete User',
                                'model' => ' User ',

                        ]);

                        Permission::create([
                            'name' => 'users.restore',
                            'description' => 'User can restore a User',
                            'front_name' => 'Restore User',
                                    'model' => ' User ',

                            ]);


    }
}