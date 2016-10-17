<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pokemons;
use App\Http\Requests;
use DB;


class usuariosController extends Controller
{
    public function select( $request ){
        $users = DB::table('pokemons')->where('votes', '>', 100)->get();
    }
    public function selectTypes($var){
        //$pokemons=pokemons::all();
        //$pokemons = DB::table('pokemons')->where('type1', '>', 100)->get();

        $pokemons = DB::table('pokemons')
                    ->where('type1', '=', $var)
                    ->orWhere('type2', $var)
                    ->get();

        //dd($pokemons);


        return view('consultarUsuarios', compact('pokemons'));
    }


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

    	return Redirect('/consultarUsuarios');

    }

    public function perfil($id){
        $user = pokemons::find($id);
        return view('consultarPerfil', compact('user'));
    }
    
    public function consultar(){
        $pokemons=pokemons::all();
        return view('consultarUsuarios', compact('pokemons'));
    }
        public function consultarPag(){
        $pokemons=pokemons::paginate(10);
        return view('consultarUsuarios', compact('pokemons'));
    }

    public function eliminar($id){
        usuarios::find($id)->delete();
        return Redirect('/consultarUsuarios');
    }

    public function actualizar($id){
        $user = usuarios::find($id);
        return view('actualizarUsuarios', compact('user'));
    }

    public function actualizarUsuario($id, Request $datos){
        $usuario = usuarios::find($id);
        $usuario->nombre = $datos->input('nombre');
        $usuario->edad = $datos->input('edad');
        $usuario->sexo = $datos->input('sexo');
        $usuario->correo = $datos->input('correo');
        $usuario->save();

        return Redirect('/consultarUsuarios');
    }

    public function pdfUsuarios (){
        $usuarios=usuarios::all();

        $vista=view('pdfUsuarios',compact ('usuarios'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream();
    }














}
