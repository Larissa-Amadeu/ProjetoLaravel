<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;
    protected $table = 'cadastros';
    protected $connection = 'pgsql';
    protected $fillable = [
        'nome',
        'email',
        'password',
        'empresa',
    ];



    public function formularios() {
        return $this->hasMany(Formulario::class);
       
    }

    
}




