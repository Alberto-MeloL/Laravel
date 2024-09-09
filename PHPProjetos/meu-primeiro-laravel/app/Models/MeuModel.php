<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeuModel extends Model
{
    use HasFactory;

    // declaramdo um array
    // ao criar o model com -m ja cria o migration
    protected $fillable = [
        'nome',
        'descricao',
        'valor'
    ];
}
