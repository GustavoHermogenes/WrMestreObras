<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contratos extends Model
{
    use HasFactory;
    protected $table = 'contratos';

    protected $primaryKey = 'idContrato';

    protected $fillable = [
        'idContrato',
        'idProjeto',
        'IdCliente',
        'valorContrato',
        'dataAssinaturaContrato',
        'statusContrato'
    ];
}
