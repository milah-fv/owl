<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_detalles', function (Blueprint $table) {
            $table->id();
            $table->string('nro_pedido_cliente', 20)->nullable();
            $table->string('nro_factura_cliente', 20)->nullable();
            $table->date('fecha_factura')->nullable();
            $table->string('valor_mercancia', 20)->nullable();
            $table->string('regimen_aduanero', 30)->nullable();
            $table->string('peso_neto', 20)->nullable();
            $table->string('volumen', 20)->nullable();
            $table->string('pallets', 20)->nullable();
            $table->string('cajas', 20)->nullable();
            $table->unsignedBigInteger('descripcion_merc_id')->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->foreign('servicio_id')
                    ->references('id')
                    ->on('servicios')->onDelete('cascade');
            $table->foreign('descripcion_merc_id')
                    ->references('id')
                    ->on('descripcion_mercaderia')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_detalles');
    }
}
