<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'nombre_maquina',
        'descripcion',
   ];
}