<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nomeUsuario');
            $table->string('emailUsuario')->unique();
            $table->string('senhaUsuario');
            $table->unsignedBigInteger('tipoUsuarioId');
            $table->string('tipoUsuarioType');
            $table->boolean('emailVerificado')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

