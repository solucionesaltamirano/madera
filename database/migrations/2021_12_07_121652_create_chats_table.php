<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message', 1000);
            $table->unsignedMediumInteger('user_send_id')->index('fk_chats_users1_idx');
            $table->unsignedMediumInteger('user_receive_id')->nullable()->index('fk_chats_users2_idx');
            $table->unsignedSmallInteger('chat_room_id')->nullable()->index('fk_chats_chat_rooms1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
