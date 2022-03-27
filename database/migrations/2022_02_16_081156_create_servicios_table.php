<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 10)->nullable();
            $table->string('codigo', 10)->unique()->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->unsignedBigInteger('exportador_id')->nullable();
            $table->unsignedBigInteger('agente_exportacion_id')->nullable();
            $table->unsignedBigInteger('importador_id')->nullable();
            $table->unsignedBigInteger('agente_importacion_id')->nullable();
            $table->unsignedBigInteger('serie_id')->nullable();
            $table->timestamps();
            $table->foreign('estado_id')
                    ->references('id')
                    ->on('estados')->onDelete('set null');
            $table->foreign('exportador_id')
                    ->references('id')
                    ->on('exportadores')->onDelete('set null');
            $table->foreign('agente_exportacion_id')
                    ->references('id')
                    ->on('agente_ad_exportacion')->onDelete('set null'); 
            $table->foreign('importador_id')
                    ->references('id')
                    ->on('importadores')->onDelete('set null'); 
            $table->foreign('agente_importacion_id')
                    ->references('id')
                    ->on('agente_ad_importacion')->onDelete('set null'); 
            $table->foreign('serie_id')
                    ->references('id')
                    ->on('series')->onDelete('set null'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
