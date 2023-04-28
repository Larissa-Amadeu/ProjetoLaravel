<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $table = 'formularios';
    protected $connection = 'pgsql';
    protected $fillable = [
        'nomeProjeto',
        'descricao',
        'plataforma',
    ];

    // FORMULARIO --> CADASTRO
    public function cadastro(){
    return $this->belongsTo(Cadastro::class);
    }

    public function propositos() {
        return $this->hasMany(Proposito::class);
       
    }
}




