<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class clientes extends Model
{
   protected $fillable = [
    'nomeCliente',
    'numeroCliente',
    'emailCliente ',
    'enderecoCliente',
    'tipoServicoCliente',
    'observacoesServicoCliente',
    'statusCliente',
];

    public function usuario(){
        return $this->morphTo(usuarios::class, 'tipo_usuario');
    }
}
