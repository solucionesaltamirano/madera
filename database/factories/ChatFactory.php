<?php

namespace Database\Factories;

use App\Models\Chat;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $random = rand(1, 9);

        if($random <= 2){
            if($random == 1){
                $sender = 1;
            }else{
                $sender = 2;
            }
        }else{
            $sender = rand(\App\Models\User::min('id'), \App\Models\User::max('id'));
        }

        if($random <= 2){
            if($random == 2){
                $receiver = 1;
            }else{
                $receiver = 2;
            }
        }else{
            $receiver = rand(\App\Models\User::min('id'), \App\Models\User::max('id'));
        
            while ($sender == $receiver) {
                $receiver = rand(\App\Models\User::min('id'), \App\Models\User::max('id'));
            }
        }

        $fecha = \Carbon\Carbon::now()->subDays(rand(1, 30))->format('Y-m-d H:i:s');

        return [
        'message' => $this->faker->sentence($nbWords = rand(3,10), $variableNbWords = true),
        'user_send_id' => $sender,
        'user_receive_id' => $receiver,
        'created_at' => $fecha,
        'updated_at' => $fecha,
        // 'deleted_at' => now(),
        ];
    }
}
