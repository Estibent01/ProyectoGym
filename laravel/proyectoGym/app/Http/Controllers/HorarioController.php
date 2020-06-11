<?php

namespace App\Http\Controllers;

use App\Horario;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::paginate(20);
        return view('horarios.index')->with('horarios',$horarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horarios.create');
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
        
                $horario = new Horario;
                $horario->dia                   = $request->dia;
                $horario->horario_apertura      = $request->horario_apertura;
                $horario->horario_cierre        = $request->horario_cierre;
        
        
        
                if ($horario->save()) {
                    return redirect('horario')->with('message','El horario Fue adicionado con éxito');
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
        $horario = Horario::findOrFail($id);
        return view('horarios.show')->with('horario', $horario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::findOrFail($id);
        //dd($horario);
        return view('horarios.edit')->with('horario', $horario);
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
  // dd($request->all());
        
  $horario =  Horario::find($id);
  $horario->dia                   = $request->dia;
  $horario->horario_apertura      = $request->horario_apertura;
  $horario->horario_cierre        = $request->horario_cierre;



  if ($horario->save()) {
      return redirect('horario')->with('message','El horario Fue adicionado con éxito');
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
        $horario = Horario::find($id);
        
        if($horario->delete()){
        return redirect('horario')->with('message','El horario '.$horario->nombre.' Fue eliminado con éxito');
        }
    }
}
