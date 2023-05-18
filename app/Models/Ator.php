<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    use HasFactory;
    protected $table = 'atores';
    protected $connection = 'pgsql';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'agencia',
        'rua',
        'numero',
        'codigoPostal',
        'cidade',
        'estado',
        'pais',
    ];

    
public function formulario(){
    return $this->belongsTo(Formulario::class);
    }
}
