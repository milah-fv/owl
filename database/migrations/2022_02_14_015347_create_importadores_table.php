<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('nit', 20)->unique();
            $table->string('domicilio', 200)->nullable();
            $table->string('contacto', 200)->nullable();
            $table->string('telefono', 50)->nullable();
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
        Schema::dropIfExists('importadores');
    }
}
