<?php

namespace Database\Factories;

use App\Models\ClienteTelefono;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteTelefonoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClienteTelefono::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => $this->faker->word,
        'telefono' => $this->faker->word,
        'nombre' => $this->faker->word,
        'puesto' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
