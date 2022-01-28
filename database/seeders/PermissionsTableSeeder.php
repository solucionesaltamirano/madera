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
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a items',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'items.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            1 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all items',
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'items.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            2 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a items',
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'items.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            3 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a items',
                'guard_name' => 'web',
                'id' => 4,
                'name' => 'items.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            4 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a permissions',
                'guard_name' => 'web',
                'id' => 5,
                'name' => 'permissions.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            5 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all permissions',
                'guard_name' => 'web',
                'id' => 6,
                'name' => 'permissions.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            6 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a permissions',
                'guard_name' => 'web',
                'id' => 7,
                'name' => 'permissions.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            7 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a permissions',
                'guard_name' => 'web',
                'id' => 8,
                'name' => 'permissions.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            8 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a externalAuths',
                'guard_name' => 'web',
                'id' => 9,
                'name' => 'externalAuths.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            9 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all externalAuths',
                'guard_name' => 'web',
                'id' => 10,
                'name' => 'externalAuths.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            10 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a externalAuths',
                'guard_name' => 'web',
                'id' => 11,
                'name' => 'externalAuths.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            11 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a externalAuths',
                'guard_name' => 'web',
                'id' => 12,
                'name' => 'externalAuths.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            12 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a users',
                'guard_name' => 'web',
                'id' => 13,
                'name' => 'users.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            13 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all users',
                'guard_name' => 'web',
                'id' => 14,
                'name' => 'users.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            14 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a users',
                'guard_name' => 'web',
                'id' => 15,
                'name' => 'users.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            15 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a users',
                'guard_name' => 'web',
                'id' => 16,
                'name' => 'users.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            16 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a menus',
                'guard_name' => 'web',
                'id' => 17,
                'name' => 'menus.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            17 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all menus',
                'guard_name' => 'web',
                'id' => 18,
                'name' => 'menus.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            18 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a menus',
                'guard_name' => 'web',
                'id' => 19,
                'name' => 'menus.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            19 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a menus',
                'guard_name' => 'web',
                'id' => 20,
                'name' => 'menus.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            20 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a chats',
                'guard_name' => 'web',
                'id' => 21,
                'name' => 'chats.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            21 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all chats',
                'guard_name' => 'web',
                'id' => 22,
                'name' => 'chats.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            22 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a chats',
                'guard_name' => 'web',
                'id' => 23,
                'name' => 'chats.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            23 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a chats',
                'guard_name' => 'web',
                'id' => 24,
                'name' => 'chats.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            24 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a chatRooms',
                'guard_name' => 'web',
                'id' => 25,
                'name' => 'chatRooms.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            25 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all chatRooms',
                'guard_name' => 'web',
                'id' => 26,
                'name' => 'chatRooms.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            26 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a chatRooms',
                'guard_name' => 'web',
                'id' => 27,
                'name' => 'chatRooms.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            27 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a chatRooms',
                'guard_name' => 'web',
                'id' => 28,
                'name' => 'chatRooms.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            28 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a blogCategories',
                'guard_name' => 'web',
                'id' => 29,
                'name' => 'blogCategories.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            29 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all blogCategories',
                'guard_name' => 'web',
                'id' => 30,
                'name' => 'blogCategories.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            30 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a blogCategories',
                'guard_name' => 'web',
                'id' => 31,
                'name' => 'blogCategories.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            31 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a blogCategories',
                'guard_name' => 'web',
                'id' => 32,
                'name' => 'blogCategories.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            32 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a businessConfigurations',
                'guard_name' => 'web',
                'id' => 33,
                'name' => 'businessConfigurations.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            33 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all businessConfigurations',
                'guard_name' => 'web',
                'id' => 34,
                'name' => 'businessConfigurations.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            34 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a businessConfigurations',
                'guard_name' => 'web',
                'id' => 35,
                'name' => 'businessConfigurations.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            35 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a businessConfigurations',
                'guard_name' => 'web',
                'id' => 36,
                'name' => 'businessConfigurations.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            36 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Create a roles',
                'guard_name' => 'web',
                'id' => 37,
                'name' => 'roles.create',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            37 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Show all roles',
                'guard_name' => 'web',
                'id' => 38,
                'name' => 'roles.show',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            38 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Edit a roles',
                'guard_name' => 'web',
                'id' => 39,
                'name' => 'roles.edit',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            39 => 
            array (
                'created_at' => '2022-01-27 18:24:09',
                'deleted_at' => NULL,
                'description' => 'Erase a roles',
                'guard_name' => 'web',
                'id' => 40,
                'name' => 'roles.destroy',
                'updated_at' => '2022-01-27 18:24:09',
            ),
            40 => 
            array (
                'created_at' => '2022-01-27 18:24:47',
                'deleted_at' => NULL,
                'description' => 'Chat',
                'guard_name' => 'web',
                'id' => 41,
                'name' => 'auth.chat',
                'updated_at' => '2022-01-27 18:24:47',
            ),
            41 => 
            array (
                'created_at' => '2022-01-27 18:24:47',
                'deleted_at' => NULL,
                'description' => 'Chat Group',
                'guard_name' => 'web',
                'id' => 42,
                'name' => 'auth.chat-room',
                'updated_at' => '2022-01-27 18:24:47',
            ),
            42 => 
            array (
                'created_at' => '2022-01-27 18:24:47',
                'deleted_at' => NULL,
                'description' => 'Items in each menu',
                'guard_name' => 'web',
                'id' => 43,
                'name' => 'auth.menus-has-items',
                'updated_at' => '2022-01-27 18:24:47',
            ),
            43 => 
            array (
                'created_at' => '2022-01-27 18:24:47',
                'deleted_at' => NULL,
                'description' => 'Dashboard for Administrators',
                'guard_name' => 'web',
                'id' => 44,
                'name' => 'admin.dashboard',
                'updated_at' => '2022-01-27 18:24:47',
            ),
            44 => 
            array (
                'created_at' => '2022-01-27 18:24:47',
                'deleted_at' => NULL,
                'description' => 'Create Items from existing routes',
                'guard_name' => 'web',
                'id' => 45,
                'name' => 'items.from-routes',
                'updated_at' => '2022-01-27 18:24:47',
            ),
            45 => 
            array (
                'created_at' => '2022-01-27 18:24:47',
                'deleted_at' => NULL,
                'description' => 'Create Permissions from existing routes',
                'guard_name' => 'web',
                'id' => 46,
                'name' => 'permissions.from-routes',
                'updated_at' => '2022-01-27 18:24:47',
            ),
            46 => 
            array (
                'created_at' => '2022-01-27 18:25:13',
                'deleted_at' => NULL,
                'description' => 'Dashboard for Users app',
                'guard_name' => 'web',
                'id' => 47,
                'name' => 'app.dashboard',
                'updated_at' => '2022-01-27 18:25:13',
            ),
            47 => 
            array (
                'created_at' => '2022-01-27 18:25:13',
                'deleted_at' => NULL,
                'description' => 'Dashboard for developers',
                'guard_name' => 'web',
                'id' => 48,
                'name' => 'dev.dashboard',
                'updated_at' => '2022-01-27 18:25:13',
            ),
        ));
        
        
    }
}