<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id('idContrato');
            $table->unsignedBigInteger('idProjeto');
            $table->unsignedBigInteger('idCliente');
            $table->decimal('valorContrato');
            $table->date('dataAssinaturaContrato');
            $table->enum('statusContrato', ['ativo', 'inativo']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}

