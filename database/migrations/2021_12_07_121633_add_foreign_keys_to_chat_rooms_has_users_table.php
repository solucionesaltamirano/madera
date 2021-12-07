<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToChatRoomsHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chat_rooms_has_users', function (Blueprint $table) {
            $table->foreign('chat_room_id', 'fk_chat_rooms_has_users_chat_rooms1')->references('id')->on('chat_rooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('user_id', 'fk_chat_rooms_has_users_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chat_rooms_has_users', function (Blueprint $table) {
            $table->dropForeign('fk_chat_rooms_has_users_chat_rooms1');
            $table->dropForeign('fk_chat_rooms_has_users_users1');
        });
    }
}
