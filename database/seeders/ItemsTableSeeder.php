<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Mostrar todas las opciones',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 1,
                'item_id' => NULL,
                'name' => 'items',
                'route' => 'items.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            1 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Crear un nuevo item',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 2,
                'item_id' => NULL,
                'name' => 'Nuevo item',
                'route' => 'items.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            2 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Show all permissions',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 3,
                'item_id' => NULL,
                'name' => 'permissions',
                'route' => 'permissions.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            3 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Create a new permissions',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 4,
                'item_id' => NULL,
                'name' => 'permissions create',
                'route' => 'permissions.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            4 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Show all externalAuths',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 5,
                'item_id' => NULL,
                'name' => 'externalAuths',
                'route' => 'externalAuths.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            5 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Create a new externalAuths',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 6,
                'item_id' => NULL,
                'name' => 'externalAuths create',
                'route' => 'externalAuths.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            6 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Show all users',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 7,
                'item_id' => NULL,
                'name' => 'Usuarios',
                'route' => 'users.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            7 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Crear un nuevo usuario',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 8,
                'item_id' => NULL,
                'name' => 'Nuevo usuario',
                'route' => 'users.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            8 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Show all menus',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 9,
                'item_id' => NULL,
                'name' => 'menus',
                'route' => 'menus.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            9 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Create a new menus',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 10,
                'item_id' => NULL,
                'name' => 'menus create',
                'route' => 'menus.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            10 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Show all chats',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 11,
                'item_id' => NULL,
                'name' => 'chats',
                'route' => 'chats.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            11 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Create a new chats',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 12,
                'item_id' => NULL,
                'name' => 'chats create',
                'route' => 'chats.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            12 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Show all chatRooms',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 13,
                'item_id' => NULL,
                'name' => 'chatRooms',
                'route' => 'chatRooms.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            13 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Create a new chatRooms',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 14,
                'item_id' => NULL,
                'name' => 'chatRooms create',
                'route' => 'chatRooms.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            14 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Show all blogCategories',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 15,
                'item_id' => NULL,
                'name' => 'blogCategories',
                'route' => 'blogCategories.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            15 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Create a new blogCategories',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 16,
                'item_id' => NULL,
                'name' => 'blogCategories create',
                'route' => 'blogCategories.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            16 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Show all businessConfigurations',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 17,
                'item_id' => NULL,
                'name' => 'businessConfigurations',
                'route' => 'businessConfigurations.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            17 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Create a new businessConfigurations',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 18,
                'item_id' => NULL,
                'name' => 'businessConfigurations create',
                'route' => 'businessConfigurations.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            18 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Show all roles',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 19,
                'item_id' => NULL,
                'name' => 'roles',
                'route' => 'roles.index',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            19 => 
            array (
                'created_at' => '2022-01-27 18:22:37',
                'deleted_at' => NULL,
                'description' => 'Create a new roles',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 20,
                'item_id' => NULL,
                'name' => 'roles create',
                'route' => 'roles.create',
                'updated_at' => '2022-01-27 18:22:37',
            ),
            20 => 
            array (
                'created_at' => '2022-01-27 18:23:30',
                'deleted_at' => NULL,
                'description' => 'Test Page',
                'icon' => '<i class="fal fa-star"></i>',
                'id' => 21,
                'item_id' => NULL,
                'name' => 'auth test',
                'route' => 'auth.test',
                'updated_at' => '2022-01-27 18:23:30',
            ),
            21 => 
            array (
                'created_at' => '2022-01-27 18:23:30',
                'deleted_at' => NULL,
                'description' => 'Chat',
                'icon' => '<i class="fal fa-comments-alt"></i>',
                'id' => 22,
                'item_id' => NULL,
                'name' => 'Chat',
                'route' => 'auth.chat',
                'updated_at' => '2022-01-27 18:23:30',
            ),
            22 => 
            array (
                'created_at' => '2022-01-27 18:23:30',
                'deleted_at' => NULL,
                'description' => 'Chat Group',
                'icon' => '<i class="fal fa-users-class"></i>',
                'id' => 23,
                'item_id' => NULL,
                'name' => 'Chat grupales',
                'route' => 'auth.chat-room',
                'updated_at' => '2022-01-27 18:23:30',
            ),
            23 => 
            array (
                'created_at' => '2022-01-27 18:23:30',
                'deleted_at' => NULL,
                'description' => 'Items in each menu',
                'icon' => '<i class="fas fa-list-ul"></i>',
                'id' => 24,
                'item_id' => NULL,
                'name' => 'auth menus-has-items',
                'route' => 'auth.menus-has-items',
                'updated_at' => '2022-01-27 18:23:30',
            ),
            24 => 
            array (
                'created_at' => '2022-01-27 18:23:30',
                'deleted_at' => NULL,
                'description' => 'Dashboard for Administrators',
                'icon' => '<i class="fal fa-tachometer-fastest"></i>',
                'id' => 25,
                'item_id' => NULL,
                'name' => 'Dashboard',
                'route' => 'admin.dashboard',
                'updated_at' => '2022-01-27 18:23:30',
            ),
            25 => 
            array (
                'created_at' => '2022-01-27 18:23:30',
                'deleted_at' => NULL,
                'description' => 'Create Items from existing routes',
                'icon' => '<i class="fal fa-random"></i>',
                'id' => 26,
                'item_id' => NULL,
                'name' => 'items from-routes',
                'route' => 'items.from-routes',
                'updated_at' => '2022-01-27 18:23:30',
            ),
            26 => 
            array (
                'created_at' => '2022-01-27 18:23:30',
                'deleted_at' => NULL,
                'description' => 'Create Permissions from existing routes',
                'icon' => '<i class="fal fa-user-lock"></i>',
                'id' => 27,
                'item_id' => NULL,
                'name' => 'permissions from-routes',
                'route' => 'permissions.from-routes',
                'updated_at' => '2022-01-27 18:23:30',
            ),
            27 => 
            array (
                'created_at' => '2022-01-27 18:23:39',
                'deleted_at' => NULL,
                'description' => 'User Welcome',
                'icon' => '<i class="fal fa-star"></i>',
                'id' => 28,
                'item_id' => NULL,
                'name' => 'auth welcome',
                'route' => 'auth.welcome',
                'updated_at' => '2022-01-27 18:23:39',
            ),
            28 => 
            array (
                'created_at' => '2022-05-05 16:01:40',
                'deleted_at' => NULL,
                'description' => 'Ver todos los clientes',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 29,
                'item_id' => NULL,
                'name' => 'Clientes',
                'route' => 'clientes.index',
                'updated_at' => '2022-05-05 16:01:40',
            ),
            29 => 
            array (
                'created_at' => '2022-05-05 16:01:40',
                'deleted_at' => NULL,
                'description' => 'Crear un nuevo cliente',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 30,
                'item_id' => NULL,
                'name' => 'Nuevo cliente',
                'route' => 'clientes.create',
                'updated_at' => '2022-05-05 16:01:40',
            ),
            30 => 
            array (
                'created_at' => '2022-05-05 16:01:40',
                'deleted_at' => NULL,
                'description' => 'Ver todos los certificados',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 31,
                'item_id' => NULL,
                'name' => 'Certificados',
                'route' => 'certificados.index',
                'updated_at' => '2022-05-05 16:01:40',
            ),
            31 => 
            array (
                'created_at' => '2022-05-05 16:01:40',
                'deleted_at' => NULL,
                'description' => 'Crear un certificado',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 32,
                'item_id' => NULL,
                'name' => 'Crear certificado',
                'route' => 'certificados.create',
                'updated_at' => '2022-05-05 16:01:40',
            ),
            32 => 
            array (
                'created_at' => '2022-05-05 16:30:56',
                'deleted_at' => NULL,
                'description' => 'Ver las empresas',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 33,
                'item_id' => NULL,
                'name' => 'Empresas',
                'route' => 'clienteEmpresas.index',
                'updated_at' => '2022-05-05 16:30:56',
            ),
            33 => 
            array (
                'created_at' => '2022-05-05 16:30:56',
                'deleted_at' => NULL,
                'description' => 'Crear una empresa',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 34,
                'item_id' => NULL,
                'name' => 'Nueva Empresa',
                'route' => 'clienteEmpresas.create',
                'updated_at' => '2022-05-05 16:30:56',
            ),
            34 => 
            array (
                'created_at' => '2022-05-05 16:30:56',
                'deleted_at' => NULL,
                'description' => 'Show all logErrores',
                'icon' => '<i class="fal fa-table"></i>',
                'id' => 35,
                'item_id' => NULL,
                'name' => 'logErrores',
                'route' => 'logErrores.index',
                'updated_at' => '2022-05-05 16:30:56',
            ),
            35 => 
            array (
                'created_at' => '2022-05-05 16:30:56',
                'deleted_at' => NULL,
                'description' => 'Create a new logErrores',
                'icon' => '<i class="fal fa-layer-plus"></i>',
                'id' => 36,
                'item_id' => NULL,
                'name' => 'logErrores create',
                'route' => 'logErrores.create',
                'updated_at' => '2022-05-05 16:30:56',
            ),
        ));
        
        
    }
}