<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Admin


        $admin =     Role::create([
            'name' => 'Super-Admin',
            'description' => 'System admin have all access',
            'front_name' => 'Super Administrator',
        ]);



        //Guest
        Role::create([
            'name' => 'guest',
            'description' => 'Default Role can only view info can not edit or add any info on projects',
            'front_name' => 'Guest',
        ]);


        Role::create([
            'name' => 'director',
            'description' => 'Can admin projects',
            'front_name' => 'Director',
        ]);



        Role::create([
            'name' => 'secretary',
            'description' => 'Can manage donations and expenses',
            'front_name' => 'Secretary',
        ]);


        Role::create([
            'name' => 'treasurer',
            'description' => 'Can manage donations',
            'front_name' => 'Treasure',
        ]);


        Role::create([
            'name' => 'admin',
            'description' => 'Can manage system  users, projects and modules',
            'front_name' => 'Adminsitrator',
        ]);



        $user = User::find(1);
        $user->assignRole('Super-Admin');
        $user = User::find(2);
        $user->assignRole('guest');
    }
}
