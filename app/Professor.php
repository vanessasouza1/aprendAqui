<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professor extends Authenticatable
{   
    use Notifiable;

    protected $table = 'professors';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'telefone', 'cpf', 'password', 'endereco', 'habilidade'];

    /*protected $fillable = [
        'name', 'email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  /*  protected $hidden = [
        'password', 'remember_token',
    ];*/



}

