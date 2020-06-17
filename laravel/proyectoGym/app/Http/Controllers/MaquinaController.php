<?php

namespace App\Http\Controllers;

use App\Machine;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MaquinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $maquinas = Machine::paginate(20);
        return view('maquinas.index')->with('maquinas',$maquinas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maquinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maquina = new Machine;
        $maquina->nombre_maquina                 = $request->nombre_maquina;
        $maquina->descripcion                        = $request->descripcion;
     
    

      


        if ($maquina->save()) {
            return redirect('maquinas')->with('message','La maquina '.$maquina->nombre_maquina.' Fue adicionado con éxito');
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
        $maquina = Machine::findOrFail($id);
        return view('maquinas.show')->with('maquina', $maquina);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maquina = Machine::findOrFail($id);
        return view('maquinas.edit')->with('maquina',$maquina);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $maquina =  Machine::find($id);
        $maquina->nombre_maquina         = $request->nombre_maquina;
        $maquina->descripcion             = $request->descripcion;
       
    

      


        if ($maquina->save()) {
            return redirect('maquinas')->with('message','La maquina '.$maquina->nombre_maquina.' Fue adicionado con éxito');
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
        $maquina = Maquina::find($id);
        
        if($maquina->delete()){
        return redirect('maquinas')->with('message','La maquina '.$maquina->name.' Fue eliminado con éxito');
        }
    }
}
