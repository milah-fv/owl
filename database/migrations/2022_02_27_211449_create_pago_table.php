<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->id();
            $table->decimal('flete', 20,2)->nullable();
            $table->decimal('seguro', 20,2)->nullable();
            $table->decimal('total', 20,2)->nullable();
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->foreign('servicio_id')
                    ->references('id')
                    ->on('servicios')->onDelete('cascade');
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
        Schema::dropIfExists('pago');
    }
}
