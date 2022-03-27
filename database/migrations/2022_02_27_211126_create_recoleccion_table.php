<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecoleccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recoleccion', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('hora', 20)->nullable();
            $table->string('tipo_transporte', 30)->nullable();
            $table->string('direccion', 200)->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->unsignedBigInteger('emp_recolectora_id')->nullable();
            $table->foreign('servicio_id')
                    ->references('id')
                    ->on('servicios')->onDelete('cascade');
            $table->foreign('emp_recolectora_id')
                    ->references('id')
                    ->on('empresa_recolectora')->onDelete('set null');
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
        Schema::dropIfExists('recoleccion');
    }
}
