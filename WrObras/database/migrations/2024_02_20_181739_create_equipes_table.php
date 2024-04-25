<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nomeFuncionario');
            $table->date('contratacaoFuncionario');
            $table->decimal('salarioFuncionario');
            $table->string('cargoFuncionario');
            $table->enum('statusFuncionario', ['ativo', 'inativo']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipes');
    }
}

