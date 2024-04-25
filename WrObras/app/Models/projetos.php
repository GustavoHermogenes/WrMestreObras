<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projetos extends Model
{
    protected $table = 'projetos';

    protected $primaryKey = 'idProjetos';

    protected $fillable = [
        'idCliente',
        'idFuncionario',
        'descricaoProjeto',
        'dataInicioProjeto',
        'dataConclusaoProjeto',
        'cidadeProjeto',
        'statusProjeto'
    ];

}
