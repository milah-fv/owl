<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaCargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_carga', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('contacto', 200)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('direccion', 200)->nullable();
            $table->string('estado', 50)->nullable();
            $table->string('ciudad', 50)->nullable();
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
        Schema::dropIfExists('empresa_carga');
    }
}
