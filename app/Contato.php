<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //método
    public function Lista(){
        return (object)[
            'nome' => 'Gabriel',
            'telefone' => '98745632'
        ];
    }
}
