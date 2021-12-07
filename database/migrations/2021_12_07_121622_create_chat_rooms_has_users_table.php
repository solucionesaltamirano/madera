<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatRoomsHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_rooms_has_users', function (Blueprint $table) {
            $table->unsignedSmallInteger('chat_room_id')->index('fk_chat_rooms_has_users_chat_rooms1_idx');
            $table->unsignedMediumInteger('user_id')->index('fk_chat_rooms_has_users_users1_idx');
            $table->primary(['chat_room_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_rooms_has_users');
    }
}
