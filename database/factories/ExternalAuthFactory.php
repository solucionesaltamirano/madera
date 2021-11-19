<?php

namespace Database\Factories;

use App\Models\ExternalAuth;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExternalAuthFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExternalAuth::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'external_auth' => $this->faker->word,
        'external_id' => $this->faker->word,
        'external_email' => $this->faker->word,
        'external_avatar' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
