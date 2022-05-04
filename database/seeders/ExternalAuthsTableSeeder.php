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
                'external_id' => '116849154240337377352',
                'external_email' => 'solucionesaltamirano@gmail.com',
                'external_avatar' => 'https://lh3.googleusercontent.com/a-/AOh14Gj4OM9aN-d5_Won7Fh4cQtOm1UgZnsoG-daLPOa=s96-c',
                'created_at' => '2021-11-17 13:14:45',
                'updated_at' => '2021-11-23 13:06:43',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'external_auth' => 'google',
                'external_id' => '107105204776308778532',
                'external_email' => 'gersonaltamirano@gmail.com',
                'external_avatar' => 'https://lh3.googleusercontent.com/a-/AOh14GjvQ8PE5Dy1TXj-QMY51K_UGW9EEFE_nTOMJ3m4ig=s96-c',
                'created_at' => '2021-11-18 17:24:26',
                'updated_at' => '2021-11-23 12:03:51',
                'deleted_at' => NULL,
            ),
            
        ));
        
        
    }
}