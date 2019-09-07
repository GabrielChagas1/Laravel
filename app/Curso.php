<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'Titulo', 'Descricao', 'Valor', 'Imagem',  'Publicado',
    ];
}
