<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'codigo' => $this->faker->word,
        'nombre_empresa' => $this->faker->word,
        'direccion' => $this->faker->word,
        'fecha_registro' => $this->faker->date('Y-m-d H:i:s'),
        'fecha_vencimiento' => $this->faker->date('Y-m-d H:i:s'),
        'nombre_representante_legal' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
