<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        \App\Models\User::factory(100)->create();
        $this->call(ExternalAuthsTableSeeder::class);
        \App\Models\ChatRoom::factory(20)->create();
        \App\Models\Chat::factory(10000)->create();

        \App\Models\ChatRoom::all()->each(function ($room) {
            $room->users()->attach(\App\Models\User::all()->random(20));
        });
        
    }
}
