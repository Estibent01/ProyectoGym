<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Horario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::paginate(20);
        return view('usuarios.index')->with('usuarios',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horarios = Horario::all();
        return view('usuarios.create')
                ->with('horarios',$horarios);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User;
        $usuario->nombre                = $request->nombre;
        $usuario->no_documento          = $request->no_documento;
        $usuario->email                  = $request->email;
        $usuario->imagen_usuario         = $request->imagen_usuario;
        $usuario->rol                   = $request->rol;
        $usuario->id_horario          = $request->id_horario;
        $usuario->password  = bcrypt($request->pasword);

        if($request->hasFile('imagen_usuario')){
            $file = time().''.$request->imagen_usuario->extension();
            $request->imagen_usuario->move(public_path('imgs'), $file);
            $usuario->imagen_usuario  = 'imgs/'.$file;           
        }

        if ($usuario->save()) {
            return redirect('usuarios')->with('message','El Usuario'.$usuario->nombre.' Fue adicionado con éxito');
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
        $usuario = User::findOrFail($id);
        return view('usuarios.show')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit')->with('usuario',$usuario);
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
        $usuario = new User;
        $usuario->nombre                = $request->nombre;
        $usuario->no_documento          = $request->no_documento;
        $usuario->email                  = $request->email;
        $usuario->imagen_usuario         = $request->imagen_usuario;
        $usuario->rol                   = $request->rol;
        $usuario->id_horario          = $request->id_horario;
        $usuario->password  = bcrypt($request->pasword);

        if($request->hasFile('imagen_usuario')){
            $file = time().''.$request->imagen_usuario->extension();
            $request->imagen_usuario->move(public_path('imgs'), $file);
            $usuario->imagen_usuario  = 'imgs/'.$file;           
        }

        if ($usuario->save()) {
            return redirect('usuarios')->with('message','El Usuario'.$usuario->nombre.' Fue adicionado con éxito');
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
        $usuario = User::find($id);
        
        if($usuario->delete()){
        return redirect('usuarios')->with('message','El Usuario '.$usuario->name.' Fue eliminado con éxito');
        }
    }
}

