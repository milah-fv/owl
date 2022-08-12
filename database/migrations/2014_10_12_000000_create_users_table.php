<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('email', 150)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('apellidos', 150);
            $table->string('celular', 50)->nullable();
            $table->string('cargo', 50)->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('img')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

       public function down()
    {
        Schema::dropIfExists('users');
    }

  
}

