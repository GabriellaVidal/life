<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
     protected $fillable = ['nome', 'cpf', 'email', 'data_nasc', 'nacionalidade'];
}
