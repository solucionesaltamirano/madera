<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clientes')->delete();
        
        \DB::table('clientes')->insert(array (
            0 => 
            array (
                'codigo' => 'GT-',
                'created_at' => '2022-05-07 10:23:47',
                'deleted_at' => NULL,
                'direccion' => 'Guastatoya',
                'fecha_registro' => '2022-05-09 10:23:47',
                'fecha_vencimiento' => '2022-05-10 00:25:47',
                'id' => 1,
                'nombre_empresa' => 'Aserraderos de Guatemala',
                'nombre_representante_legal' => 'Eduardo Santamaria',
                'updated_at' => '2022-05-07 10:23:47',
                'user_id' => 3,
            ),
        ));
        
        
    }
}