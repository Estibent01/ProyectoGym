<?php

use Illuminate\Database\Seeder;

class EjerciciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ejercicios')->insert([
			'categoria'	=>	'Baja de Peso',
			'nombre_ejercicio'	 =>	'Abdominales',
			'descripcion'	    =>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,',
			'numero_series'     =>  'x10',
			'tiempo_ejercicio'     =>  '30 segundos',
			'musculo_ejercicio'	=>	'Abdomen',
			'imagen'	=>	'no-image.png',
			'maquina_ejercicio'		=>	'',
		]);

    }
}
