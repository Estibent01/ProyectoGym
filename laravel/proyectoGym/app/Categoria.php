<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre_categoria',
        'descripcion_categoria',
        'imagen',
        'Id_usuario',
    ];

    public function users(){
        return $this->hasMany('App\Users');
    }
}