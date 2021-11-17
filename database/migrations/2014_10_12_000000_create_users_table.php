<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->unsignedMediumInteger('id')->autoIncrement();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('username')->nullable();
            // $table->string('phone')->nullable()->unique();
            // $table->string('profile_photo_path', 2048)->nullable();
            // $table->string('password')->nullable();
            // $table->string('external_avatar')->nullable();
            // $table->string('external_id')->nullable();
            // $table->string('external_auth')->nullable();
            // $table->rememberToken();
            // $table->foreignId('current_team_id')->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->timestamps();
            // $table->softDeletes();

            $table->mediumIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->unsignedBigInteger('current_team_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
