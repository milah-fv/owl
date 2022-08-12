<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportes', function (Blueprint $table) {
            $table->id();
            $table->string('operador', 200);
            $table->string('placas_tracto', 20)->nullable();
            $table->string('licencia', 20)->nullable();
            $table->string('caat', 10)->nullable();
            $table->string('nro_eco', 20)->nullable();
            $table->string('capacidad', 30)->nullable();
            $table->string('placa_cajas', 20)->nullable();
            $table->string('transporte_afianzador', 100)->nullable();
            $table->string('codigo_aduanero', 20)->nullable();
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
        Schema::dropIfExists('transportes');
    }
}
