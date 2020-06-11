<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('ejercicios', function () {
    $ejercicios = App\Ejercicio::take(25)->get();
    foreach ($ejercicios as $ejercicio) {
    	echo "<li>".$ejercicio->nombre_ejercicio."<br></li>";
    }
});

Route::resource('ejercicios', 'EjercicioController');
Route::resource('musculos', 'MusculosController');
Route::resource('categorias', 'CategoriasController');
Route::resource('maquinas', 'MaquinaController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('horario', 'HorarioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
