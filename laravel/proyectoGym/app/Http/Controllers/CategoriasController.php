<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(20);
        return view('categorias.index')->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('categorias.create')
                    ->with('categorias',$categorias);
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
        
        $categoria = new Categoria;
        $categoria->nombre_categoria           = $request->nombre_categoria;
        $categoria->descripcion_categoria      = $request->descripcion_categoria;
        $categoria->Id_usuario                 = $request->Id_usuario;


        if($request->hasFile('imagen')){
            $file = time().''.$request->imagen->extension();
            $request->imagen->move(public_path('imgs'), $file);
            $categoria->imagen  = 'imgs/'.$file;           
        }


        if ($categoria->save()) {
            return redirect('categorias')->with('message','la categoria '.$categoria->nombre_categoria.' Fue adicionado con éxito');
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
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show')->with('categorias', $categoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        //dd($categorias);
        return view('categorias.edit')->with('categoria', $categoria);
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
               $categoria = Categoria::find($id);
               $categoria->nombre_categoria  = $request->nombre_categoria;
               $categoria ->descripcion_categoria     = $request->descripcion_categoria;
               $categoria->Id_usuario                 = $request->Id_usuario;

               if ($request->hasFile('imagen')) {
                   $file = time().'.'.$request->imagen->extension();
                   $request->imagen->move(public_path('imgs'), $file);
                   $categoria->imagen = 'imgs/'.$file;
               }
                if($categoria->save()) {
                  return redirect('categorias')->with('message', 'la categoria: '.$categoria->nombre_categoria.' fue actualizado con exito');
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
        $categoria = Categoria::find($id);
        
        if($ejercicio->delete()){
        return redirect('categorias')->with('message','la categoria '.$categoria->name_categoria.' Fue eliminado con éxito');
        }
    }
}
