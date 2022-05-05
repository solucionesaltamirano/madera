<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedMediumInteger('user_id')->index('fk_clientes_users1_idx');
            $table->string('codigo', 8);
            $table->string('nombre_empresa', 200);
            $table->string('direccion', 45);
            $table->timestamp('fecha_registro')->nullable();
            $table->timestamp('fecha_vencimiento');
            $table->string('nombre_representante_legal', 200);
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
        Schema::dropIfExists('clientes');
    }
}
