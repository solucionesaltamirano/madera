<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'DEV',
                'guard_name' => 'web',
                'created_at' => '2022-01-31 09:48:56',
                'updated_at' => '2022-01-31 09:48:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'SUPERADMIN',
                'guard_name' => 'web',
                'created_at' => '2022-01-31 09:49:17',
                'updated_at' => '2022-01-31 09:49:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ADMIN',
                'guard_name' => 'web',
                'created_at' => '2022-01-31 09:49:33',
                'updated_at' => '2022-01-31 09:49:33',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'USER',
                'guard_name' => 'web',
                'created_at' => '2022-01-31 09:54:25',
                'updated_at' => '2022-01-31 09:54:25',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'CLIENTE',
                'guard_name' => 'web',
                'created_at' => '2022-05-04 22:45:37',
                'updated_at' => '2022-05-04 22:45:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}