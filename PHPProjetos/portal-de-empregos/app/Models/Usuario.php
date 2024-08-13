<?php
// uma vez criado o usuario é login e logout nao tem muito o que editar e nome emakl e senha por exemplo no banco nao pesa
namespace App\Models;
// msg de erros na tela com efeito
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable =[
        'name', 'email', 'password',
    ];

    protected $hidden =[
        'password', 'remember_token',
    ];

    public function inscricoes(){
        return $this->hasMany(Incricao::class);
    }
}
