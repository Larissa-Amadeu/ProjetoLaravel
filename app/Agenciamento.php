<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenciamento extends Model
{
    use HasFactory;
    protected $table = 'agenciamentos';
    protected $connection = 'pgsql';
    protected $fillable = [
        'exemplo',
        'descricao',
        
    ];

    
public function formulario(){
    return $this->belongsTo(Formulario::class);
    }
}
