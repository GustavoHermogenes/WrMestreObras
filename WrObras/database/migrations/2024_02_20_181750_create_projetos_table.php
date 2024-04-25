<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id('idProjetos');
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idFuncionario');
            $table->string('descricaoProjeto');
            $table->date('dataInicioProjeto');
            $table->date('dataConclusaoProjeto');
            $table->string('cidadeProjeto');
            $table->enum('statusProjeto', ['ativo', 'inativo']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}

