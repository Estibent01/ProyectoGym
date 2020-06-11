<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
         'dia',
         'horario_apertura',
         'horario_cierre',
    ];
}
