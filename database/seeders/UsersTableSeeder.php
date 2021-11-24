<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2021-11-16 20:29:59',
                'current_team_id' => NULL,
                'deleted_at' => NULL,
                'email' => 'solucionesaltamirano@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Soluciones Altamirano',
                'password' => '$2y$10$024Xn7P2b8ZPcs9VxuQUROylLlxfMfT6cKG64xgHYXUbqMyMzxOU2',
                'phone' => '45256124',
                'profile_photo_path' => 'https://lh3.googleusercontent.com/a-/AOh14Gj4OM9aN-d5_Won7Fh4cQtOm1UgZnsoG-daLPOa=s96-c',
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-11-16 20:29:59',
                'username' => 'SolAlta',
            ),
            1 => 
            array (
                'created_at' => '2021-11-16 20:31:10',
                'current_team_id' => NULL,
                'deleted_at' => NULL,
                'email' => 'gersonaltamirano@gmail.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Gerson Isaac Altamirano Campos',
                'password' => '$2y$10$tNByQh2b3tmEbZwi8/8bruev4KZnMvLA9xSpopDBQ5hL3sg6BIxNi',
                'phone' => '42149372',
                'profile_photo_path' => 'https://lh3.googleusercontent.com/a-/AOh14GjvQ8PE5Dy1TXj-QMY51K_UGW9EEFE_nTOMJ3m4ig=s96-c',
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-11-16 20:31:10',
                'username' => 'gersonac',
            ),
        ));
        
        
    }
}