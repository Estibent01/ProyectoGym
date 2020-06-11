<?php

namespace App\Http\Controllers;

use App\Musculo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MusculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musculos = Musculo::paginate(20);
        return view('musculos.index')->with('musculos',$musculos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('musculos.create');
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
        
                $musculo = new Musculo;
                $musculo->nombre                   = $request->nombre;
                $musculo->descripcion_musculo      = $request->descripcion_musculo;
                $musculo->imagen                   = $request->imagen;
        
                if($request->hasFile('imagen')){
                    $file = time().''.$request->imagen->extension();
                    $request->imagen->move(public_path('imgs'), $file);
                    $musculo->imagen  = 'imgs/'.$file;           
                }
        
        
                if ($musculo->save()) {
                    return redirect('musculos')->with('message','El musculo '.$musculo->nombre.' Fue adicionado con éxito');
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
        $musculo = Musculo::findOrFail($id);
        return view('musculos.show')->with('musculo', $musculo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $musculo = Musculo::findOrFail($id);
        //dd($musculo);
        return view('musculos.edit')->with('musculo', $musculo);
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
        //dd($request->all());
        $musculo = Musculo::find($id);
        $musculo->nombre  = $request->nombre;
        $musculo->descripcion_musculo     = $request->descripcion_musculo;
        if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('imgs'), $file);
            $musculo->imagen = 'imgs/'.$file;
        }
         if($musculo->save()) {
           return redirect('musculos')->with('message', 'El musculo: '.$musculo->nombre.' fue actualizado con exito');
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
        $musculo = Musculo::find($id);
        
        if($musculo->delete()){
        return redirect('musculos')->with('message','El musculo '.$musculo->nombre.' Fue eliminado con éxito');
        }
    }
}
