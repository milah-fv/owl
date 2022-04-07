<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregaInicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega_inicio', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('hora', 20)->nullable();
            $table->string('tipo_transporte', 30)->nullable();
            $table->string('lugar_carga', 50)->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->unsignedBigInteger('emp_carga_id')->nullable();
            $table->foreign('servicio_id')
                    ->references('id')
                    ->on('servicios')->onDelete('cascade');
            $table->foreign('emp_carga_id')
                    ->references('id')
                    ->on('empresa_carga')->onDelete('set null');
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
        Schema::dropIfExists('entrega_inicio');
    }
}
