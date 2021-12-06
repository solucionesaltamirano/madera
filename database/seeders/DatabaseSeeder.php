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
        \App\Models\Chat::factory(5000)->create();

        
    }
}
