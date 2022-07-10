<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTransporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_transporte', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('domicilio', 200)->nullable();
            $table->string('contacto', 200)->nullable();
            $table->string('telefono', 100)->nullable();
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
        Schema::dropIfExists('empresa_transporte');
    }
}
