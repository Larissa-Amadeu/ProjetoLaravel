<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

public function cadastro(){
    return $this->belongsTo('App\Models\Cadastro');
}

}

