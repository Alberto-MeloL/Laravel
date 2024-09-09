<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Empresa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable =[
          'name', 'email', 'password','nameEmpresa', 'descricaoEmpresa',
    ];

    protected $hidden =[
        'password', 'remember_token',
    ];

    public function vagas(){
        return $this->hasMany(Vaga::class);
    }
}

