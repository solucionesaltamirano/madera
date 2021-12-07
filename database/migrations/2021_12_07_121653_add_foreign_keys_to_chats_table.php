<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chats', function (Blueprint $table) {
            $table->foreign('chat_room_id', 'fk_chats_chat_rooms1')->references('id')->on('chat_rooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('user_send_id', 'fk_chats_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('user_receive_id', 'fk_chats_users2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chats', function (Blueprint $table) {
            $table->dropForeign('fk_chats_chat_rooms1');
            $table->dropForeign('fk_chats_users1');
            $table->dropForeign('fk_chats_users2');
        });
    }
}
