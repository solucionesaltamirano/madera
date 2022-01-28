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
                'created_at' => '2022-01-27 18:25:40',
                'updated_at' => '2022-01-27 18:25:40',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'SUPERADMIN',
                'guard_name' => 'web',
                'created_at' => '2022-01-27 18:25:52',
                'updated_at' => '2022-01-27 18:25:52',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ADMIN',
                'guard_name' => 'web',
                'created_at' => '2022-01-27 18:26:33',
                'updated_at' => '2022-01-27 18:26:33',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'USER',
                'guard_name' => 'web',
                'created_at' => '2022-01-27 18:26:33',
                'updated_at' => '2022-01-27 18:26:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}