<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClienteTelefonosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cliente_telefonos')->delete();
        
        \DB::table('cliente_telefonos')->insert(array (
            0 => 
            array (
                'cliente_id' => 1,
                'created_at' => '2022-05-09 01:03:23',
                'deleted_at' => NULL,
                'id' => 1,
                'nombre' => 'Eduardo Santamaria',
                'principal' => 'SI',
                'puesto' => NULL,
                'telefono' => '+50240096481',
                'updated_at' => '2022-05-09 01:03:23',
            ),
        ));
        
        
    }
}