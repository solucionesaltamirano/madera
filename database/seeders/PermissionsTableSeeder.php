<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'items.index',
                'guard_name' => 'web',
                'description' => 'Show all items',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'items.create',
                'guard_name' => 'web',
                'description' => 'Create a items',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'items.edit',
                'guard_name' => 'web',
                'description' => 'Edit a items',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'items.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a items',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'permissions.index',
                'guard_name' => 'web',
                'description' => 'Show all permissions',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'permissions.create',
                'guard_name' => 'web',
                'description' => 'Create a permissions',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'permissions.edit',
                'guard_name' => 'web',
                'description' => 'Edit a permissions',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'permissions.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a permissions',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'externalAuths.index',
                'guard_name' => 'web',
                'description' => 'Show all externalAuths',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'externalAuths.create',
                'guard_name' => 'web',
                'description' => 'Create a externalAuths',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'externalAuths.edit',
                'guard_name' => 'web',
                'description' => 'Edit a externalAuths',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'externalAuths.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a externalAuths',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'users.index',
                'guard_name' => 'web',
                'description' => 'Show all users',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'users.create',
                'guard_name' => 'web',
                'description' => 'Create a users',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'users.edit',
                'guard_name' => 'web',
                'description' => 'Edit a users',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'users.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a users',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'menus.index',
                'guard_name' => 'web',
                'description' => 'Show all menus',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'menus.create',
                'guard_name' => 'web',
                'description' => 'Create a menus',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'menus.edit',
                'guard_name' => 'web',
                'description' => 'Edit a menus',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'menus.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a menus',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'chats.index',
                'guard_name' => 'web',
                'description' => 'Show all chats',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'chats.create',
                'guard_name' => 'web',
                'description' => 'Create a chats',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'chats.edit',
                'guard_name' => 'web',
                'description' => 'Edit a chats',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'chats.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a chats',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'chatRooms.index',
                'guard_name' => 'web',
                'description' => 'Show all chatRooms',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'chatRooms.create',
                'guard_name' => 'web',
                'description' => 'Create a chatRooms',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'chatRooms.edit',
                'guard_name' => 'web',
                'description' => 'Edit a chatRooms',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'chatRooms.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a chatRooms',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'blogCategories.index',
                'guard_name' => 'web',
                'description' => 'Show all blogCategories',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'blogCategories.create',
                'guard_name' => 'web',
                'description' => 'Create a blogCategories',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'blogCategories.edit',
                'guard_name' => 'web',
                'description' => 'Edit a blogCategories',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'blogCategories.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a blogCategories',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'businessConfigurations.index',
                'guard_name' => 'web',
                'description' => 'Show all businessConfigurations',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'businessConfigurations.create',
                'guard_name' => 'web',
                'description' => 'Create a businessConfigurations',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'businessConfigurations.edit',
                'guard_name' => 'web',
                'description' => 'Edit a businessConfigurations',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'businessConfigurations.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a businessConfigurations',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'roles.index',
                'guard_name' => 'web',
                'description' => 'Show all roles',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'roles.create',
                'guard_name' => 'web',
                'description' => 'Create a roles',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'roles.edit',
                'guard_name' => 'web',
                'description' => 'Edit a roles',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'roles.destroy',
                'guard_name' => 'web',
                'description' => 'Erase a roles',
                'created_at' => '2022-01-31 08:50:34',
                'updated_at' => '2022-01-31 08:50:34',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'auth.test',
                'guard_name' => 'web',
                'description' => 'Test Page',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'auth.welcome',
                'guard_name' => 'web',
                'description' => 'User Welcome',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'auth.chat',
                'guard_name' => 'web',
                'description' => 'Chat',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'auth.chat-room',
                'guard_name' => 'web',
                'description' => 'Chat Group',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'auth.menus-has-items',
                'guard_name' => 'web',
                'description' => 'Items in each menu',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'admin.dashboard',
                'guard_name' => 'web',
                'description' => 'Dashboard for Administrators',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'items.from-routes',
                'guard_name' => 'web',
                'description' => 'Create Items from existing routes',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'permissions.from-routes',
                'guard_name' => 'web',
                'description' => 'Create Permissions from existing routes',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'app.dashboard',
                'guard_name' => 'web',
                'description' => 'Dashboard for Users app',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'dev.dashboard',
                'guard_name' => 'web',
                'description' => 'Dashboard for developers',
                'created_at' => '2022-01-31 09:47:58',
                'updated_at' => '2022-01-31 09:47:58',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'clientes.index',
                'guard_name' => 'web',
                'description' => 'Ver todos los clientes',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'clientes.create',
                'guard_name' => 'web',
                'description' => 'Crear un cliente',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'clientes.edit',
                'guard_name' => 'web',
                'description' => 'Editar un cliente',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'clientes.destroy',
                'guard_name' => 'web',
                'description' => 'Borrar un cliente',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'clienteTelefonos.index',
                'guard_name' => 'web',
                'description' => 'Ver los telefonos de los clientes',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'clienteTelefonos.create',
                'guard_name' => 'web',
                'description' => 'crear un telefono de un cliente',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'clienteTelefonos.edit',
                'guard_name' => 'web',
                'description' => 'Editar un telefono de un cliente',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'clienteTelefonos.destroy',
                'guard_name' => 'web',
                'description' => 'Borrar un telefono de un cliente',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'clienteEmpresas.index',
                'guard_name' => 'web',
                'description' => 'Ver tods las empresas de los clientes',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'clienteEmpresas.create',
                'guard_name' => 'web',
                'description' => 'Crear una empresa de un cliente',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'clienteEmpresas.edit',
                'guard_name' => 'web',
                'description' => 'Editar una empresa de un cliente',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'clienteEmpresas.destroy',
                'guard_name' => 'web',
                'description' => 'Borrar una empresa de un cliente',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'certificados.index',
                'guard_name' => 'web',
                'description' => 'Ver los certificados',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'certificados.create',
                'guard_name' => 'web',
                'description' => 'Crear un certificado',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'certificados.edit',
                'guard_name' => 'web',
                'description' => 'Editar un certificado',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'certificados.destroy',
                'guard_name' => 'web',
                'description' => 'Borrar un certificado',
                'created_at' => '2022-05-04 17:51:07',
                'updated_at' => '2022-05-04 17:51:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}