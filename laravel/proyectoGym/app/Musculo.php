<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musculo extends Model
{
    protected $fillable = [
           'nombre',
           'descripcion',
           'imagen',
    ];

    
}
