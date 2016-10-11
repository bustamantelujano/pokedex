<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use App\Http\Requests;

class proyectoController extends Controller
{
    public function guardar(Request $request){
    	$nombre=$request->input('nombre');
    	$edad=$request->input('edad');
    	$sexo=$request->input('sexo');
    	$correo=$request->input('correo');

    	//Guardar en BD

    	$nuevo = new usuarios;
    	$nuevo->nombre= $nombre;
    	$nuevo->edad=$edad;
    	$nuevo->sexo=$sexo;
    	$nuevo->correo=$correo;
    	$nuevo->save();

    	return Redirect('/consultarProyecto');

    }

    public function consultar(){
        $usuarios=usuarios::all();
        return view('consultarProyecto', compact('usuarios'));
    }

    public function eliminar($id){
        usuarios::find($id)->delete();
        return Redirect('/consultarProyecto');
    }

    public function actualizar($id){
        $user = usuarios::find($id);
        return view('actualizarProyecto', compact('user'));
    }

    public function actualizarProyecto($id, Request $datos){
        $usuario = usuarios::find($id);
        $usuario->nombre = $datos->input('nombre');
        $usuario->edad = $datos->input('edad');
        $usuario->sexo = $datos->input('sexo');
        $usuario->correo = $datos->input('correo');
        $usuario->save();

        return Redirect('/consultarProyecto');
    }














}
