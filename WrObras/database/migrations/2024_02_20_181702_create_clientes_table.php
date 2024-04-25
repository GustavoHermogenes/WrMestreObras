<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCliente');
            $table->string('numeroCliente');
            $table->string('emailCliente')->unique();
            $table->string('enderecoCliente');
            $table->string('tipoServicoCliente');
            $table->text('observacoesServicoCliente')->nullable();
            $table->text('statusCliente', '10')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}

