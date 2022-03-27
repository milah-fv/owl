<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregaFinalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega_final', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('hora', 20)->nullable();
            $table->string('lugar_entrega', 200)->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->unsignedBigInteger('importador_id')->nullable();
            $table->foreign('servicio_id')
                    ->references('id')
                    ->on('servicios')->onDelete('cascade');
            $table->foreign('importador_id')
                    ->references('id')
                    ->on('importadores')->onDelete('set null');
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
        Schema::dropIfExists('entrega_final');
    }
}
