<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    use HasFactory;
    protected $table = 'dados';
    protected $connection = 'pgsql';
    protected $fillable = [
        'descricao',
        'detalhamento',
        'recurso',
        'acoes',
    ];

    //PROPOSITO -->FORMULARIO
public function formulario(){
    return $this->belongsTo(Formulario::class);
    }
}
