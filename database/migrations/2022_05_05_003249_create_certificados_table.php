<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('cliente_id')->index('fk_certificados_clientes1_idx');
            $table->unsignedMediumInteger('empresa_id')->index('fk_certificados_cliente_empresas1_idx');
            $table->unsignedSmallInteger('secuencial');
            $table->date('fecha');
            $table->string('descripcion', 200);
            $table->string('destino', 300);
            $table->unsignedSmallInteger('cantidad');
            $table->decimal('humedad', 5);
            $table->date('fecha_inicio');
            $table->time('hora_inicio');
            $table->date('fecha_fin');
            $table->time('hora_fin');
            $table->decimal('temperatura_inicio', 5);
            $table->decimal('temperatura_fin', 5);
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
        Schema::dropIfExists('certificados');
    }
}
