<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_empresas', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedSmallInteger('cliente_id')->index('fk_cliente_empresas_clientes1_idx');
            $table->string('nombre', 200);
            $table->string('direccion', 200);
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
        Schema::dropIfExists('cliente_empresas');
    }
}
