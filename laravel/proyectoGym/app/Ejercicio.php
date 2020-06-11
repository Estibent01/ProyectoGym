<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    protected $fillable = [
    	    'categoria',
									'nombre_ejercicio',
									'descripcion',
									'numero_series',
									'tiempo_ejercicio',
									'musculo_ejercicio',
									'imagen',
									'maquina_ejercicio',
				];
				
				public function categorias(){
					return $this->hasMany('App\Categorias');
				}

				public function musculos(){
					return $this->belongsToMany('App\Musculos');
				}

				public function maquinas(){
					return $this->hasOne('App\Maquinas');
				}
}
