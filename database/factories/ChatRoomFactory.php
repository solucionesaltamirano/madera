<?php

namespace Database\Factories;

use App\Models\ChatRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChatRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->colorName . '-' . rand(1, 100);

        while (ChatRoom::where('name', $name)->exists()) {
            $name = $this->faker->colorName . '-' . rand(1, 100);
        }

        return [
        'name' => $name,
        'private' => rand(0, 1),
        'description' => $this->faker->paragraph,
        'created_at' => today(),
        'updated_at' => today(),
        // 'deleted_at' => ,
        'user_id' => rand(\App\Models\User::min('id'), \App\Models\User::max('id')),
        ];
    }
}
