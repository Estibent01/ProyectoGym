<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
         'nombre_maquina',
         'descripcion',
    ];
}
