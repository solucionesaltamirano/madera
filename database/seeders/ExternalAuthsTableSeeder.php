<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExternalAuthsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('external_auths')->delete();
        
        \DB::table('external_auths')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'external_auth' => 'google',
                'external_id' => '123456789',
                'external_email' => 'solucionesaltamirano@gmail.com',
                'external_avatar' => 'https://www.freepik.es/foto-gratis/resultados',
                'created_at' => '2021-11-17 13:14:45',
                'updated_at' => '2021-11-23 13:06:43',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'external_auth' => 'google',
                'external_id' => '1234569879dfe',
                'external_email' => 'gersonaltamirano@gmail.com',
                'external_avatar' => 'https://www.freepik.es/foto-gratis/resultados',
                'created_at' => '2021-11-18 17:24:26',
                'updated_at' => '2021-11-23 12:03:51',
                'deleted_at' => NULL,
            ),
            
        ));
        
        
    }
}