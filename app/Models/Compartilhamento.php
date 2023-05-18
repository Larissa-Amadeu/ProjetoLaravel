<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compartilhamento extends Model
{
    use HasFactory;
    protected $table = 'compartilhamentos';
    protected $connection = 'pgsql';
    protected $fillable = [
        'justificativa',
        'baseLegal',
        'acoes',     
    ];

    //PROPOSITO -->FORMULARIO
public function formulario(){
    return $this->belongsTo(Formulario::class);
    }
}
