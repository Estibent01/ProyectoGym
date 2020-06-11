<?php

namespace App\Http\Controllers;

use App\Ejercicio;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\EjercicioRequest;

class EjercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ejercicios = Ejercicio::paginate(20);
        return view('ejercicios.index')->with('ejercicios',$ejercicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ejercicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // dd($request->all());

        $ejercicio = new Ejercicio;
        $ejercicio->categoria                          = $request->categoria;
        $ejercicio->nombre_ejercicio                   = $request->nombre_ejercicio;
        $ejercicio->descripcion                        = $request->descripcion;
        $ejercicio->numero_series                      = $request->numero_series;
        $ejercicio->tiempo_ejercicio                   = $request->tiempo_ejercicio;
        $ejercicio->musculo_ejercicio                  = $request->musculo_ejercicio;
        $ejercicio->imagen                             = $request->imagen;
        $ejercicio->maquina_ejercicio                  = $request->maquina_ejercicio;

        if($request->hasFile('imagen')){
            $file = time().''.$request->imagen->extension();
            $request->imagen->move(public_path('imgs'), $file);
            $ejercicio->imagen  = 'imgs/'.$file;           
        }


        if ($ejercicio->save()) {
            return redirect('ejercicios')->with('message','El ejercico '.$ejercicio->nombre_ejercicio.' Fue adicionado con éxito');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ejercicio = Ejercicio::findOrFail($id);
        return view('ejercicios.show')->with('ejercicio', $ejercicio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $ejercicio = Ejercicio::findOrFail($id);
        return view('ejercicios.edit')->with('ejercicio',$ejercicio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EjercicioRequest $request, $id)
    {
        //  dd($request->all());
         $ejercicio = Ejercicio::find($id);
         $ejercicio->categoria              = $request->categoria;
         $ejercicio->nombre_ejercicio       = $request->nombre_ejercicio;
         $ejercicio->descripcion            = $request->descripcion;
         $ejercicio->numero_series          = $request->numero_series;
         $ejercicio->tiempo_ejercicio       = $request->tiempo_ejercicio;
         $ejercicio->musculo_ejercicio      = $request->musculo_ejercicio;
         $ejercicio->imagen                 = $request->imagen;
         $ejercicio->maquina_ejercicio      = $request->maquina_ejercicio;

         if ($request->hasFile('imagen')) {
             $file = time().'.'.$request->imagen->extension();
             $request->imagen->move(public_path('imgs'), $file);
             $ejercicio->imagen = 'imgs/'.$file;
         }
          
         if($ejercicio->save()){
            return redirect('ejercicios')->with('message','El ejercicio '.$ejercicio->nombre_ejercicio.' Fue eliminado con éxito');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ejercicio = Ejercicio::find($id);
        
        if($ejercicio->delete()){
        return redirect('ejercicios')->with('message','El ejercicio '.$ejercicio->nombre_ejercicio.' Fue eliminado con éxito');
        }
    }
}
