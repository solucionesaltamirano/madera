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
        $this->call(ItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(ExternalAuthsTableSeeder::class);

        // \App\Models\User::factory(50)->create();
        // \App\Models\ChatRoom::factory(30)->create();
        // \App\Models\Chat::factory(1000)->create();

        // \App\Models\ChatRoom::all()->each(function ($room) {
        //     $room->users()->attach(\App\Models\User::all()->random(20));
        // });

        // \App\Models\BlogCategory::factory(10000)->create();

        // for($i = 0; $i < 10000; $i++) {
        //     \App\Models\BusinessConfiguration::factory()->create([
        //         'key' => 'key_name-'.$i,
        //     ]);
        // }
    }
}
