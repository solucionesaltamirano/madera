<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_telefonos', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('cliente_id')->index('fk_cliente_telefonos_clientes1_idx');
            $table->string('telefono', 20);
            $table->string('nombre', 200);
            $table->string('puesto', 100)->nullable();
            $table->enum('principal', ['SI', 'NO'])->default('NO');
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
        Schema::dropIfExists('cliente_telefonos');
    }
}
