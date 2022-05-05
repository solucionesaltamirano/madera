<?php

namespace Database\Factories;

use App\Models\Certificado;
use Illuminate\Database\Eloquent\Factories\Factory;

class CertificadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Certificado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => $this->faker->word,
        'empresa_id' => $this->faker->randomDigitNotNull,
        'secuencial' => $this->faker->word,
        'fecha' => $this->faker->word,
        'descripcion' => $this->faker->word,
        'cantidad' => $this->faker->word,
        'humedad' => $this->faker->word,
        'fecha_inicio' => $this->faker->word,
        'hora_inicio' => $this->faker->word,
        'fecha_fin' => $this->faker->word,
        'hora_fin' => $this->faker->word,
        'temperatura_inicio' => $this->faker->word,
        'temperatura_fin' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
