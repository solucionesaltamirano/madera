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
                'created_at' => '2022-01-27 18:25:40',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'DEV',
                'updated_at' => '2022-01-27 18:25:40',
            ),
            1 => 
            array (
                'created_at' => '2022-01-27 18:25:52',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'SUPERADMIN',
                'updated_at' => '2022-01-27 18:25:52',
            ),
            2 => 
            array (
                'created_at' => '2022-01-27 18:26:33',
                'deleted_at' => NULL,
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'ADMIN',
                'updated_at' => '2022-01-27 18:26:33',
            ),
        ));
        
        
    }
}