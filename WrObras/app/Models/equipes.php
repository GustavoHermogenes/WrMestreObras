<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipes extends Model
{
    protected $fillable = [
        'nomeFuncionario',
        'contratacaoFuncionario',
        'salarioFuncionario ',
        'cargoFuncionario',
        'statusFuncionario'];

        public function usuario(){
            return $this->morphTo(usuarios::class, 'tipo_usuario');
        }
}
