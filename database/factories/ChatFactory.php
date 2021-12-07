<?php

namespace Database\Factories;

use App\Models\Chat;
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

        $user = rand(1, 9);
        $room = rand(\App\Models\ChatRoom::min('id'), \App\Models\ChatRoom::max('id')*3);
        $conversation = 0;

        if($room > \App\Models\ChatRoom::max('id')){
            $conversation = 1;
        }else{
            $conversation = 2;
        }

        if($conversation == 1){
            if($user <= 2){
                if($user == 1){
                    $sender = 1;
                }else{
                    $sender = 2;
                }
            }else{
                $sender = rand(\App\Models\User::min('id'), \App\Models\User::max('id'));
            }
    
            if($user <= 2){
                if($user == 2){
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
        }else{
            if($user <= 2){
                if($user == 1){
                    $sender = 1;
                }else{
                    $sender = 2;
                }
            }else{
                $sender = rand(\App\Models\User::min('id'), \App\Models\User::max('id'));
            }

            $fecha = \Carbon\Carbon::now()->subDays(rand(1, 30))->format('Y-m-d H:i:s');

            return [
                'message' => $this->faker->sentence($nbWords = rand(3,10), $variableNbWords = true),
                'user_send_id' => $sender,
                'chat_room_id' => rand(\App\Models\ChatRoom::min('id'), \App\Models\ChatRoom::max('id')),
                'created_at' => $fecha,
                'updated_at' => $fecha,
                // 'deleted_at' => now(),
                ];
        }
    }
}
